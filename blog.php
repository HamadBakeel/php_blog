<!DOCTYPE html>
<html lang="en">
<?php
include 'components/header.php';
?>
    <div id="hero" class="hero overlay subpage-hero blog-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Blog</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="blog-post">
                            <a href="blog-post.php">
                                <img src="assets/img/portfolio-1.jpg" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="blog-post.php">12 Essential Free Sketch Plugins</a></h3>
                                <p>Sketch Measure helps designers organize and outline their work for developers, project managers, and other team members</p>
                                <div class="text-right">
                                    <a class="read-more" href="blog-post.php">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="assets/img/author.jpg" alt="">John Smith</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>September 21, 2016</a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Design</a>
                                    </span>
                                    <span class="post-share">
                                        <a href=""><i class="fa-solid fa-share"></i></a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <a href="blog-post.php">
                                <img src="assets/img/portfolio-2.jpg" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="blog-post.php">Customize WordPress Themes Easily</a></h3>
                                <p>This guide is intended for those with some knowledge of HTML and CSS, but aren’t too familiar with the way WordPress themes work. If you don’t know much about web design but you are interested, that’s good too. We’ll explain everything each step of the way.</p>
                                <div class="text-right">
                                    <a class="read-more" href="blog-post.php">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="assets/img/author-3.jpg" alt="">Marc Jones</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>August 25, 2016</a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Development</a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <a href="blog-post.php">
                                <img src="assets/img/portfolio-3.jpg" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="blog-post.php">Creative Website Template PSD</a></h3>
                                <p>Free PSD web templates can be found everywhere on the internet. Most of them are ugly, some of them look nice, but rarely will you find anything great. Since Adobe Photoshop is one of those „easy to use – hard to master“ programs, many beginners and professionals decide to use PSD templates for their first website.</p>
                                <div class="text-right">
                                    <a class="read-more" href="blog-post.php">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="assets/img/author-2.jpg" alt="">Linda Smith</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>July 11, 2016</a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>PSD Template</a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->

                        <div class="ui-pagination mt-50">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <ul class="pagination">
                                        <li><a href="#">&lt;&lt;</a></li>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="more"><a href="#">...</a></li>
                                        <li><a href="#">31</a></li>
                                        <li class="active"><a href="#">32</a></li>
                                        <li><a href="#">33</a></li>
                                        <li class="more"><a href="#">...</a></li>
                                        <li><a href="#">&gt;</a></li>
                                        <li><a href="#">&gt;&gt;</a></li>
                                    </ul><!-- /.pagination -->               
                                </div>
                            </div>
                        </div><!-- /.ui-pagination -->
                    </div>
                    <aside class="col-md-4">
                        <div class="sidebar">
                            <div class="widget search-form">
                                <h4 class="widget-title">Search the blog</h4>
                                <form class="form-group">
                                    <input type="text" class="form-control" placeholder="Search" required>
                                    <button class="btn btn-green" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div><!-- /.search-form -->
                            <div class="widget widget-recent-posts">
                                <h4 class="widget-title">Recent posts</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Inside The Lipsum</a></li>
                                    <li><a href="#">Oscar Wilde</a></li>
                                    <li><a href="#">Jeffrey Ween</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div><!-- /.widget-recent-posts -->
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Inside The Lipsum <span>12</span></a></li>
                                    <li><a href="#">Oscar Wilde<span>4</span></a></li>
                                    <li><a href="#">Jeffrey Ween<span>2</span></a></li>
                                    <li><a href="#">Responsive Design<span>1</span></a></li>
                                    <li><a href="#">Development<span>9</span></a></li>
                                </ul>
                            </div><!-- /.widget-categories -->
                            <div class="widget widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">PSD Template</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div><!-- /.widget-tags -->
                        </div><!-- /.sidebar -->
                    </aside>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="site-title"><span>Agency</span>Perfect</a>
                    <p>We're a digital agency focused on creative and results-driven solutions.</p>
                    <p>We measure our success by the results we drive for our clients.</p>
                </div>
                <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                    <h3>Keep in touch</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@agencyperfect.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+37400800000">+374 (00) 80 00 00 </a></li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i><a href="+37400900000">+374 (00) 90 00 00</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>20 Leo, Armenia</p></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <h3>Featured links</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="blog.php">Blog</a></li>
                        <li><a href="portfolio.php">Porfolio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="social-links">
                            <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-links -->
                    </div>
                    <div class="col-xs-4">
                        <div class="text-right">
                            <p>&copy; AgencyPerfect</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.copyright -->
    </footer><!-- /#footer -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>