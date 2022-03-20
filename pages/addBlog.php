<?php
include ('../classes/QueryBuilder.php');
$qb = new QueryBuilder();

$categories = $qb->select("*","category")->runQuery();
//print_r($categories);
if(isset($_POST['addBlog'])){
    $title = $_POST['blogTitle'];
    $content = $_POST['blogContent'];
    $category_id = $_POST['categoryId'];
    $author = $_POST['blogAuthor'];
    $image = $_POST['blogImage'];
//    $createdAt =
    $columns = array('title','content','category_id','author','image');
    $values = array("\"$title\"","\"$content\"",$category_id,"\"$author\"","\"$author\"");
    $qb->insert("blog",$columns,$values)->runQuery();

}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add blog</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/blog.png">

</head>
<body>
    <nav>

    </nav>
    <div class="container mt-2 w-50 mb-5">
        <form action="addBlog.php" method="post">
            <div class="mt-3">
                <label for="blogTitle" class="form-label"> Blog Title</label>
                <input required class="form-control" type="text" name="blogTitle">
            </div>
            <div class="mt-3" >
                <label for="blogContent" class="form-label"> Blog Content</label>
                <textarea required class="form-control" name="blogContent"></textarea>
            </div>
            <div class="mt-3">
                <label for="blogDate" class="form-label">Blog Category</label>
                <select class="form-control" name="categoryId">
                    <?php for ($i=0 ; $i<count($categories) ; $i++){?>
                    <option value="<?php echo $categories[0]['id'] ?>"><?php echo $categories[$i]['category_name'] ?></option>;
                    <?php }?>


                </select>
            </div>
            <div class="mt-3">
                <label for="blogAuthor" class="form-label"> Blog Author</label>
                <input required class="form-control" type="text" name="blogAuthor">
            </div>
            <div class="mt-3">
                <label for="blogImage" class="form-label">Blog Image</label>
                <input required class="form-control" type="file" name="blogImage">
            </div>
            <button class="btn btn-info mt-3" type="submit" name="addBlog">Add</button>
        </form>
    </div>
</body>
</html>
