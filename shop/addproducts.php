<?php
include('../includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../home.php');
    exit();
}

$id=$_SESSION['id'];
$query=mysqli_query($conn, ' select * from category where deleted is null')
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


<!-- Video section -->
<section id="video" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Dodajte novi proizvod </h2>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                    Izaberite kategoriju proizvoda, prebacite sliku i unesite kolicinu na stanju
                </p>
            </div>

        </div>
    </div>
</section>

<?php
include ('../includes/adminheader.php');
?>

<div class="forma container">
    <h3>Dodajte novi proizvod</h3>
<form action="insertproduct.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="name">Ime proizvoda</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="cijena">Cijena</label>
        <input type="number" name="cijena" id="cijena" required step="0.5">
    </div>
    <div>
        <label for="kolicina">Pocetna kolicina</label>
        <input type="number" name="kolicina" id="kolicina" required step="1">
    </div>
    <div>
        <label for="text">Opis</label>
        <textarea name="text" id="text" required rows="10" cols="60">Kratki opis proizvoda</textarea>
    </div>
    <div>
        <label for="kategorija">Kategorija</label>
        <select name="kategorija" id="kategorija" required>
            <option value="" selected disabled hidden>Odaberite kategoriju</option>
            <?php while ($row=mysqli_fetch_assoc($query)): ?>
                <option value="<?= $row['CID'] ?>"><?= $row['CNAME'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <label for="image">Slika:</label>
    <input type="file" placeholder="Image" id="image" name="image" required>

    <input type="submit" value="Ubaci u bazu">
</form>
</div>

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