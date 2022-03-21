<?php
include '../classes/QueryBuilder.php';

$qb = new QueryBuilder();

$blogs = $qb->select("*","blog")->runQuery();
$categories = $qb->select("*","category");

if(isset($_POST['deleteBlog'])){
    $qb->delete("blog","id=".$_POST['blogId'])->runQuery();
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Blogs</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/blog.png">

    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">

</head>
<body>
<nav class="w-100 d-flex align-items-center flex-column">
    <h1>Admin</h1>
    <a href="addBlog.php" class="btn btn-outline-dark border w-auto">Add Blog</a>
</nav>

        <section class="site-section subpage-site-section section-blog">
<!--            <div class="container">-->
<!--                    <div class="">-->
                            <?php for($i=0 ; $i<count($blogs) ; $i++){?>
                        <article class=" col-lg-8 blog-post  border rounded p-2 mx-auto ">
                            <a href="../blog-post.php">
                                <?php $x = $blogs[$i]['blog_image'];
                                    echo "<img src=\"../assets/img/$x\" style='height: 300px' class='img-res' alt=\"blog image\">";
                                ?>
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="../blog-post.php"><?php echo $blogs[$i]['title'] ?></a></h3>
                                <p class="mt-3"><?php echo $blogs[$i]['content'] ?></p>
                                <div class="text-right mt-2">
                                    <a class="read-more" href="../blog-post.php?blog=<?php echo $blogs[$i]['id'] ?>">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="../assets/img/<?php echo $blogs[$i]['author_image'] ?>" alt=""><?php echo $blogs[$i]['author'] ?></a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $blogs[$i]['creation_date'] ?></a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>
                                            <?php
                                            $id = $blogs[$i]['category_id'];
                                            $category = $qb->select("category_name","category","id = $id ")->runQuery();
                                            echo $category[0]['category_name'];
                                            ?>
                                        </a>
                                    </span>
<!--                                    <span class="post-share">-->
<!--                                        <a href=""><i class="fa-solid fa-share"></i></a>-->
<!--                                    </span>-->
                                    <span class="d-flex justify-content-end">
                                        <form method="post" action="blogs.php">
                                            <input type="hidden" value="<?php echo $blogs[$i]['id']?>" name="blogId">
                                            <button type="submit" name="updateBlog" class="btn btn-outline-info mt-3">Update</button>
                                            <button type="submit" name="deleteBlog" class="btn btn-outline-danger mt-3">Delete</button>
                                        </form>
                                    </span>
                                </div>
                            </div>
                        </article>
                        <?php }?>
                    </div>
            </div>
        </section>


</body>
</html>