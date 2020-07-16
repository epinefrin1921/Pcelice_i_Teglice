<?php
include ('includes/db.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Korpa - Pčelice i Teglice</title>
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
    <link rel="stylesheet" href="css/cart.css">

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
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Vaša korpica</h2>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                    Lista proizvoda koji se nalaze u Vašoj korpici
                </p>
            </div>

        </div>
    </div>
</section>




<!-- Menu section -->
<section id="menu" class="parallax-section">
    <div class="container">

        <?php if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
            <div class="wrap" style="text-align: center">
                <h3 >Korpica je prazna!</h3>
            </div>

        <?php } else if(isset($_SESSION['products'])){
            $total=0;
            ?>

        <div class="row">

            <div class="lista">

                <div class="wow fadeInUp proizvod2 item" data-wow-delay="0.6s">

                    <h3 class="media-heading" style="text-align: left" >Naziv</h3>
                    <h3 id="formkolicina" class="media-heading" >Količina </h3>
                    <h3 class="media-heading sakrij">Cijena</h3>
                    <h3 class="media-heading stimanje sakrij">Izmjeni količinu</h3>
                    <h3 class="media-heading stimanje2 sakrij" style="text-align: right">Uredi</h3>


                </div>

                <?php foreach($_SESSION['products'] as $item): ?>
                    <div class="wow fadeInUp proizvod2 item" data-wow-delay="0.6s">

                        <?php
                        $query = mysqli_query($conn, "select * from items where ID ='{$item[0]}'");
                       $row= mysqli_fetch_assoc($query);
                       $total_price=0;
                        $total_price+=$row['Price']*$item[1];
                        $total+=$total_price;
                        ?>

                            <h3 class="media-heading" style="text-align: left"><?= $row['Name'] ?></h3>
                            <h3 id="formkolicina" class="media-heading"><?= $item[1] ?></h3>
                            <h3 class="media-heading "><?= $total_price ?>KM</h3>

                            <form id="forma" action="orders/updatecart.php?id=<?= $row['ID'] ?>" method="post">
                                <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required value="<?= $item[1] ?>" max="<?= $row['Quantity'] ?>">
                                <input class="btn btn-success btn-sm" id="submit" type="submit" value="Promijeni" >
                            </form>

                       <a href="orders/deletefromcart.php?id=<?= $row['ID'] ?>" style="text-align: right">Izbriši</a>


                    </div>
                <?php endforeach; ?>

                <div class="wow fadeInUp proizvod2" data-wow-delay="0.6s">

                    <h3 class="media-heading" style="width: 55%; text-align: left">Dostava u BiH: </h3>
                    <h3 id="formkolicina" class="media-heading" style="width: 15%; text-align: right"> 8KM </h3>

                </div>
                <div class="wow fadeInUp proizvod2" data-wow-delay="0.6s">

                    <h3 class="media-heading" style="width: 55%; text-align: left">Ukupno: </h3>
                    <h3 id="formkolicina" class="media-heading" style="width: 15%; text-align: right"> <?= $total+8 ?> KM </h3>

                </div>

            </div>

        </div>
        <?php }?>

    </div>
</section>

<?php if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
    <div class="wrap" style="text-align: center">
        <h3><a href="shop.php">Natrag na shop?</a></h3>
    </div>

<?php } else if(isset($_SESSION['products'])){?>

    <section id="contact" class="parallax-section" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                        <h2>Potvrdite narudžbu</h2>
                        <h4>Unesite podatke i uživajte u medu u roku od 24h!</h4>
                    </div>
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
                        <form id="contact-form" method="post" action="orders/placeorder.php">
                            <input name="name" type="text" class="form-control" placeholder="Vaše ime" required>
                            <input name="lastname" type="text" class="form-control" placeholder="Vaše prezime" required>
                            <input name="address" type="text" class="form-control" placeholder="Adresa" required>
                            <input name="city" type="text" class="form-control" placeholder="Grad" required>
                            <input name="phone" type="text" class="form-control" placeholder="Broj telefona" required>
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                            <input name="extra" type="text" class="form-control" placeholder="Posebna napomena">

                            <input onclick="return confirm('Da li ste sigurni? Vasa narudžba će biti poslana na adresu!');" type="submit" class="form-control submit" value="Naruči">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php } ?>


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

