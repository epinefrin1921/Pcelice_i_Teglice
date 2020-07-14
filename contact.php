<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Kontakt - Pčelice i Teglice</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">

    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>

<?php
include ('includes/header.php');
?>

<!-- Feature section -->
<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <h2>Imate pitanje za nas?</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6 wow fadeInUp sekcija" data-wow-delay="0.3s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-phone"></i></span>
                    </div>
                    <h3>Nazovite nas</h3>
                    <p>+387 (0)61 863 445</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp sekcija" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-comment-o"></i></span>
                    </div>
                    <h3>Pronađite nas na društvenim mrežama</h3>
                    <a  href="https://www.facebook.com/P%C4%8Delice-Teglice-101684814950566/"><span><i class="fa fa-facebook"></i> Facebook</span></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 wow fadeInUp sekcija" data-wow-delay="0.9s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <h3>Pošaljite nam email</h3>
                    <p>info@pceliceiteglice.ba</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Contact section -->
<section id="contact" class="parallax-section" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Imate pitanje?</h2>
                    <h4>Rado ćemo Vam se javiti!</h4>
                </div>
                <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
                    <form id="contact-form" method="post" action="#">
                        <input name="name" type="text" class="form-control" placeholder="Vaše ime" required>
                        <input name="email" type="email" class="form-control" placeholder="Vaš Email" required>
                        <textarea name="message" class="form-control" placeholder="Poruka" rows="5" required></textarea>
                        <input type="submit" class="form-control submit" value="Pošalji">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
include ('includes/footer.php');
?>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>