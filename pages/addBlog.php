<?php
include ('../classes/QueryBuilder.php');
session_start();
if(isset($_SESSION['user'])){

$qb = new QueryBuilder();

$categories = $qb->select("*","category")->runQuery();
//print_r($categories);
if(isset($_POST['addBlog'])){
    $title = $_POST['blogTitle'];
    $content = $_POST['blogContent'];
    $category_id = $_POST['categoryId'];
    $author = $_POST['blogAuthor'];
    $image = $_POST['blogImage'];
    $authorImage = $_POST['authorImage'];

    $columns = array('title','content','category_id','author','blog_image','author_image');
    $values = array("\"$title\"","\"$content\"",$category_id,"\"$author\"","\"$image\"","\"$authorImage\"");
    $qb->insert("blog",$columns,$values)->runQuery();
    echo "
    <div class=\"alert alert-success d-flex align-items-center w-25 m-auto mt-5 \" role=\"alert\"><i class='fa-solid alert-warning'></i><div>
        Blog added successfully!
      </div>
    </div>
    ";
}
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: ../login.php");
    }
?>
<!--    <script>window.location=\"addBlog.php\"</script>-->


<html lang="en">
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
    <nav class="w-100">
        <form method="post">
            <button class="btn btn-outline-danger" name="logout">Logout</button>
        </form>
        <a href="blogs.php" class="btn btn-outline-dark mx-auto">Blogs</a>
    </nav>
    <div class="container mt-0 w-50 mb-5">
        <form action="addBlog.php" method="post">
            <div>
                <label for="blogTitle" class="form-label"> Blog Title</label>
                <input required class="form-control" type="text" name="blogTitle">
            </div>
            <div class="mt-3" >
                <label for="blogContent" class="form-label"> Blog Content</label>
                <textarea required class="form-control" name="blogContent"></textarea>
            </div>
            <div class="mt-3">
                <label class="form-label">Blog Category</label>
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
            <div class="mt-3">
                <label for="authorImage" class="form-label">Author Image</label>
                <input required class="form-control" type="file" name="authorImage">
            </div>
            <button class="btn btn-info mt-3" type="submit" name="addBlog">Add</button>
        </form>
    </div>
</body>
</html>
    <?php
}
else{
    header("location: ../login.php");
}