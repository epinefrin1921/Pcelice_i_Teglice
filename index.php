<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Pčelice i Teglice</title>
    <link rel="icon" type="image" href="images/Pcelice&Teglice_LOGO_04.jpg">
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



<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.2s"><img src="images/Pcelice&Teglice_LOGO_02.png" width="300px"></h1>
              <p class="wow fadeInUp" data-wow-delay="0.4s">Online shop meda i mednih proizvoda</p>
              <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="0.6s">Želim znati više</a>
            <a href="shop.php" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="0.7s">Shop</a>

          </div>

      </div>
    </div>
</section>


<?php
include ('includes/header.php');
?>

<!-- Feature section -->
<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <h2>Želite prirodan med na vašim vratima u roku od 24 sata?</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-12 wow fadeInUp sekcija" data-wow-delay="0.3s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-money"></i></span>
                    </div>
                    <h3>Sigurno</h3>
                    <p>Naručite proizvode iz našeg shopa i platite kada ih preuzmete!</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 wow fadeInUp sekcija" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-truck"></i></span>
                    </div>
                    <h3>Brzo</h3>
                    <p>Dostavljamo med širom BiH u roku od 24 sata </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 wow fadeInUp sekcija" data-wow-delay="0.9s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-clock-o"></i></span>
                    </div>
                    <h3>Jednostavno</h3>
                    <p>Jednostavno naručite u našem online shopu. Za sva pitanja posjetite kontakt sekciju. </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- About section -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.1s">
            <h2>Naši proizvodi</h2>
            <h4>Vaš najbolji izbor</h4>
          </div>
      </div>

      <div class="clearfix"></div>
      
      <div id="sakriveno" class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">
        <img src="images/Pcelice&Teglice_Foto02.png" class="img-responsive" alt="About">
        <h3>Prirodan i zdrav</h3>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

        <!-- flexslider -->
        <div class="flexslider">
          <ul class="slides">

            <li>
              <img src="images/Pcelice&Teglice_Foto04.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/Pcelice&Teglice_Foto06.jpg" alt="Flexslider">
            </li>
            <li>
              <img src="images/Pcelice&Teglice_Foto09.jpg" alt="Flexslider">
            </li>

          </ul>
        </div>

         <p>U ponudi imamo razne vrste meda i mednih proizvoda. Više informacija možete pronaći u našem shopu</p>
      </div>

       <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.4s">
        	<h2>Samo najbolje</h2>
         	<p>Za vas smo pripremili samo najbolji odabrani med. Naručite sada i u roku od 24 sata uživajte u pravom domaćem medu.</p>
         	<p><a href="shop.php">Posjetite naš online shop</a></p>

      </div>

		</div>
	</div>
</section>



<section id="feature" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <h2>Zašto naš med?</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-12 wow fadeInUp sekcija" data-wow-delay="0.4s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-thumbs-o-up"></i></span>
                    </div>
                    <p>Kada se udruži zajednica pčela nastaje najslađi prirodni proizvod, a zove se med. Naš med je 100% prirodni domaći proizvod!</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 wow fadeInUp sekcija" data-wow-delay="0.5s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-heart"></i></span>
                    </div>
                    <p>Ne samo da je najzdraviji zaslađivač, med u svom sastavu sadrži i veoma bitne elemente za zdravlje kao što su brojni minerali, vitamini, aminokiseline, organske kiseline i aromatični sokovi. Zahvaljujući ovim svojstvima veoma je dragocjen, lako svarljiv i nakon unosa u organizam vrlo brzo se apsorbuje u krvotok. </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 wow fadeInUp sekcija" data-wow-delay="0.6s">
                <div class="feature-thumb">
                    <div class="feature-icon">
                        <span><i class="fa fa-users"></i></span>
                    </div>
                    <p>Pogodan je sve uzraste a posebno za djecu, sportiste/ice i starije osobe, prvenstveno u izgradnji i regeneraciji organizma, kao i dobrom imunološkom stanju svakog pojedinca. </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="menu" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Vrste meda</h2>
                    <h4>U ponudi imamo razne vrste meda</h4>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp" data-wow-delay="0.5s">
                    <div class="media-object pull-left">
                        <img src="images/bagrem.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Bagrem</h3>
                        <p> Bagremov med spada među najpopularnije, a odlikuje se laganim okusom uz veliki procenat fruktoze što mu omogućava dug period bez kristalizacije.</p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.4s">
                    <div class="media-object pull-left">
                        <img src="images/Pcelice&Teglice_Foto04.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Kadulja</h3>
                        <p>Preporučuje se kod psihičkih tegoba kao što su anksioznost, stres i napetost, a poboljšava raspoloženje i povećava energiju. </p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.3s">
                    <div class="media-object pull-left">
                        <img src="images/Pcelice&Teglice_Foto09.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Kesten</h3>
                        <p>Pozitivna svojstva meda od kestena su jačanje imuniteta, antibakterijsko i protuupalno djelovanje, daje energiju i potiče cirkulaciju.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp" data-wow-delay="0s">
                    <div class="media-object pull-left">
                        <img src="images/Pcelice&Teglice_Foto06.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Livada</h3>
                        <p>I ovaj med kao i svi drugi, sadrži vitamine i minerale porijeklom iz nektara koji pčele u inverzivnom procesu vraćaju bogatijim za fermentne i organske kiseline  </p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.3s">
                    <div class="media-object pull-left">
                        <img src="images/Pcelice&Teglice_Foto01.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Šumski</h3>
                        <p>Općenito može se reći da je izvanredan probiotik jer je bogat aminokiselinama koje imaju blagotvoran učinak na bakterije u probavnom sistemu</p>
                    </div>
                </div>

                <div class="media wow fadeInUp" data-wow-delay="0.4s">
                    <div class="media-object pull-left">
                        <img src="images/Pcelice&Teglice_Foto05.jpg" class="img-responsive" alt="Food Menu">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Med u saću</h3>
                        <p>Veoma je bogat vitaminom A, i preporučuje se kod respiratornih tegoba koje su produkt oslabljenog metabolizma i nedostatka hranjivih materija. </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Video section -->
<section id="video" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">Rok trajanja meda</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">
                    Rok trajanja je neograničen. Proces kristalizacije meda je prirodan, a pri konzumaciji u takvom stanju duže se zadržava u usnoj duplji što pogoduje boljoj apsorpciji hranjivih tvari. Med se može dekristalizirati na temperaturi do 40 stepeni Celzijusa te ponovo vratiti u tečno stanje.
                </p>
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
				<div class="contact-form wow fadeInUp" data-wow-delay="0.4s">
					<form id="contact-form" method="post" action="kontakt.php">
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
include('includes/footer.php');
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