<!DOCTYPE html>
<html lang="en">
<?php
include 'components/header.php';
?>
    <div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Contact</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-contact-us">

            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>Send a message</h2>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="name">Name:</label>
                                      <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="email">E-mail:</label>
                                      <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="message">Subject:</label>
                              <input class="form-control" id="subject"></input>
                            </div>
                            <div class="form-group">
                              <label for="message">Message:</label>
                              <textarea class="form-control form-control-comment" id="message"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-green">Contact us</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h2>Contact information</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Address</h3>
                                    <ul class="list-unstyled">
                                        <li>Sydney, Australia</li>
                                        <li>100 Mainstreet Center</li>
                                    </ul>
                                    <h3>E-mail</h3>
                                    <a href="mailto:pixelperfectmk@gmail.com" target="_blank">pixelperfectmk@gmail.com</a>
                                    <h3>Phone</h3>
                                    <a href="tel:2083339296" target="_blank">(208) 333 9296</a>
                                    <h3>Fax</h3>
                                    <p>(208) 333 9296</p>
                                </div>
                            </div>
                        </div><!-- /.contact-info -->
                    </div>
                </div>
            </div>
            
        </section><!-- /.section-contact-us -->

        <section id="map" class="section-map"></section><!-- /.section-map -->

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
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="portfolio.php">Porfolio</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>