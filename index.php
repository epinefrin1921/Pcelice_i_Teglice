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
              <h1 class="wow fadeInUp" data-wow-delay="0.2s"><img src="images/Pcelice&Teglice_LOGO_02.png" width="250px"></h1>
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

            <div class="ponuda">

                <div class=" wow fadeInUp" data-wow-delay="0.5s">
                        <img src="images/bagrem.jpg" class="img-responsive" alt="Food Menu">
                        <h3 >Bagrem</h3>
                        <p>Veoma popularan med koji pčele prave od sočnog bagremovog cvijetnog soka. Zahvaljujući ljekovitom svojstvu pomaže nam kod raznih zdravstvenih tegoba. Bagremov med spada među najpopularnije, a odlikuje se laganim okusom uz veliki procenat fruktoze što mu omogućava dug period bez kristalizacije. Ovaj med je dobro uzimati u toku cijele godine jer pospješuje imuni sistem, a sprječava zdravstvene probleme poput bolesti krvnog sistema, probavnog trakta i nesanice.</p>
                </div>

                <div class=" wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/Pcelice&Teglice_Foto04.jpg" class="img-responsive" alt="Food Menu">
                        <h3 >Kadulja</h3>
                        <p>U svijetu flore, a zbog njene ljekovitosti ova biljka se smatra svetom. Cvjeta u periodu maj – juni, med ima intenzivan miris i vrlo je ukusan. Med je veoma dobar i djelotvoran kod upale dišnih puteva, sa izrazitim antiseptičkim, antivirusnim i umirujućim djelovanjem. Preporučuje se kod psihičkih tegoba kao što su anksioznost, stres i napetost, a poboljšava raspoloženje i povećava energiju. Obzirom da sadrži mnogo antioksidansa preventivno djeluje na pojavu karijesa kao i u sprječavanju moždanog udara i karcinoma. </p>
                </div>

                <div class=" wow fadeInUp" data-wow-delay="0.3s">
                        <img src="images/Pcelice&Teglice_Foto09.jpg" class="img-responsive" alt="Food Menu">
                        <h3 >Kesten</h3>
                        <p>Ovaj med se najčešće dobija od cvijetnog nektara domaćeg kestena. Slatkasto – gorkog je okusa, te veoma nutritivan i tamne je boje. U svom sastavu sadrži veliki procenat fruktoze, što usporava kristaliziranje i najčešče je u tekućem stanju. Pozitivna svojstva meda od kestena su jačanje imuniteta, antibakterijsko i protuupalno djelovanje, daje energiju i potiče cirkulaciju. Obzirom na blago gorkasti okus vrlo često se koristi u kuhinji, a može se služiti kako uz slatka tako i uz slana jela. (npr. palačinke, keksi, sirevi, maslac, supe/juhe i sl.)</p>
                </div>

                <div class=" wow fadeInUp" data-wow-delay="0s">
                        <img src="images/Pcelice&Teglice_Foto06.jpg" class="img-responsive" alt="Food Menu">
                        <h3 >Livada</h3>
                        <p>Livadski med potiče od raznih cvijetnih vrsta kojima naši pašnjaci obiluju. Ukus i aroma variraju u odnosu na procentualnu zastupljenost određenog cvijeta. I ovaj med kao i svi drugi, sadrži vitamine i minerale porijeklom iz nektara koji pčele u inverzivnom procesu vraćaju bogatijim za fermentne i organske kiseline. Veoma je popularan u liječenju plućnih, stomačnih i bubrežnih bolesti, kao i kod bolesti srca i krvnih sudova. Ako livadski med u sastavu ima veći procenat glukoze u odnosu na fruktozu, tada će i kristalizacija biti ubrzana, a to je period od par mjeseci u odnosu na datum kada je med vrcan. </p>
                </div>

                <div class=" wow fadeInUp" data-wow-delay="0.3s">
                        <img src="images/Pcelice&Teglice_Foto01.jpg" class="img-responsive" alt="Food Menu">
                        <h3>Šumski</h3>
                        <p>Ovo je jedini med za koji pčele trebaju pomoć svojih malih prijatelja – insekata (biljne uši i ostali biljni insekti). Ovaj med je bogat ugljikohidratima i nalazi se u ljepljivoj masi koja se zove medna rosa. Najčešće se nalazi u četinarima i listopadnoj šumi, a za sam proces bitna je hladnoća preko noći kao i velika vlažnost. U šumskom medu smanjen je udio fruktoze i glukoze iz razloga što medna rosa ne sadrži fermente nektara, međutim obiluje saharozom, dekstrinom i mineralima. Općenito može se reći da je izvanredan probiotik jer je bogat aminokiselinama i oligosaharidima koji imaju blagotvoran učinak na bakterije u probavnom sistemu, pa se tako i preporučuje kod stomačnih tegoba. Obzirom da u sastavu ima mali procenat fruktoze i glukoze kristalizacija je usporena i sadrži više antibiotičkih svojstava. </p>
                </div>

                <div class=" wow fadeInUp" data-wow-delay="0.4s">
                        <img src="images/Pcelice&Teglice_Foto05.jpg" class="img-responsive" alt="Food Menu">
                        <h3 >Med u saću</h3>
                        <p> Kada govorimo o medu u saću, govorimo o pčelinjem domu. Taj med nije vrcan i u originalnom je obliku kakav se nalazi u košnicama. Najčešće se vadi okvir iz košnice koji se reže na manje komade i stavlja u staklene posude u koje se sipa vrcani bagremov (nije pravilo) med koji sporije kristalizira. Prilikom konzumacije možemo žvakati saće kako bi spriječili infekciju disajnog trakta te usporili propadanje zubne cakline. Veoma je bogat vitaminom A, i preporučuje se kod respiratornih tegoba koje su produkt oslabljenog metabolizma i nedostatka hranjivih materija.  Žvakanje saća je također odlična preventiva kod upale sinusa koja se javlja u jesen i proljeće. Med u saću je intenzivnijeg okusa u odnosu na tečni med, jer su u njemu sadržana eterična ulja bilja sa kojih pčele skupljaju nektar. </p>
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