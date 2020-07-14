<?php
include ('../includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_GET['id'];

$query=mysqli_query($conn, 'select * from items where ID= '.$id);

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Pčelice i Teglice</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/nivo-lightbox.css">
    <link rel="stylesheet" href="../css/nivo_themes/default/default.css">

    <link rel="stylesheet" href="../css/hover-min.css">
    <link rel="stylesheet" href="../css/flexslider.css">

    <link rel="stylesheet" href="../css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>

<?php
include ('../includes/header.php');
?>

<?php
include ('../includes/adminheader.php');
?>

<?php
while($row=mysqli_fetch_assoc($query)): ?>

    <!-- Video section -->
    <section id="video" class="parallax-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s"> <?= $row['Name'] ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.8s">
                        Dodajte novu kolicnu
                    </p>
                </div>

            </div>
        </div>
    </section>

    <div class="wow fadeInUp proizvod" data-wow-delay="0.6s" style="margin-top: 40px; margin-bottom: 40px ">

        <div class="opisproizvoda">
            <div>
                <h3 class="media-heading marka">Na stanju: <?= $row['Quantity'] ?></h3>
            </div>

            <div class="cijena">
                <div>
                    <h3 class="media-heading"><?= $row['Name'] ?></h3>
                </div>

                <div>
                    <form action="savequantity.php?id=<?= $id ?>" method="post">
                        <label>
                            <input type="number" step="1" min="1" placeholder="Kolicina" name="quantity" id="quantity">
                        </label>
                        <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                    </form>

                </div>
            </div>
        </div>

    </div>


<?php endwhile; ?>



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
include('../includes/footer.php');
?>

<!-- javscript js -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/jquery.magnific-popup.min.js"></script>

<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.backstretch.min.js"></script>

<script src="../js/isotope.js"></script>
<script src="../js/imagesloaded.min.js"></script>
<script src="../js/nivo-lightbox.min.js"></script>

<script src="../js/jquery.flexslider-min.js"></script>

<script src="../js/jquery.parallax.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>

<script src="../js/custom.js"></script>

</body>
</html>