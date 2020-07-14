<?php
include ('includes/db.php');
session_start();

$query=mysqli_query($conn, 'select * from items where DateDeleted is null');

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Shop - Pčelice i Teglice</title>

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

<!-- Video section -->
<section id="video" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Naručite odmah</h2>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                  Dobrodošli na naš online shop.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Menu section -->
<section id="menu" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                    <h2>Naša ponuda</h2>
                    <?php
                    if (isset($_SESSION['product_added'])):?>
                        <p id="message" style="color: white; background: #c21500; padding: 7px; border-radius: 10px">Proizvod dodan</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="lista">

                <?php
                unset($_SESSION['product_added']);
                while ($row=mysqli_fetch_assoc($query)): ?>
                <div class="wow fadeInUp proizvod" data-wow-delay="0.6s">

                    <?php
                    $incart=0;

                    if (isset($_SESSION['products'])){
                    foreach($_SESSION['products'] as $index=>$item){
                        if($item[0]==$row['ID']){
                            $incart=$item[1];
                        }}};
                    ?>
                    <div>
                        <img src="images/<?= $row['Image'] ?>" class="img-responsive" alt="Food Menu">
                    </div>

                    <div class="opisproizvoda">
                        <div id="first">
                            <h3 class="media-heading marka"><?= $row['Price'] ?>KM</h3>
                            <h3 class="media-heading"><?= $row['Name'] ?></h3>
                        </div>

                        <div id="second">
                            <p style="text-align: center">Na stanju: <?= $row['Quantity']-$incart ?> </p>
                            <p style="text-align: center">U korpici: <?= $incart ?> </p>

                            <div>
                                <form action="orders/cart.php?id=<?= $row['ID'] ?>" method="post">
                                    <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['Quantity']-$incart ?>">
                                    <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj" >
                                </form>
                            </div>

                        </div>
                        <div>
                            <a href="shop/singleproducts.php?id=<?= $row['ID'] ?>">Više informacija o proizvodu</a>
                            <?php if(isset($_SESSION['id'])): ?>
                                <a href="shop/deleteproducts.php?id=<?= $row['ID'] ?>">Delete</a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>

<section id="video" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Rok trajanja meda</h2>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
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