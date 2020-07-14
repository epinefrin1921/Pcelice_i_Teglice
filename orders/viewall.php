<?php
include('../includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];

$query=mysqli_query($conn, 'select * from orders where Status="cekanje" order by OID desc ');
$query2=mysqli_query($conn, 'select * from orders where Status="poslano" order by OID desc');
$query3=mysqli_query($conn, 'select * from orders where Status="zavrseno" order by OID desc');

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
    <link rel="stylesheet" href="../css/styleorders.css">

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
                <h2 class="wow fadeInUp" data-wow-delay="0.5s">Ovdje se nalaze sve narudžbe </h2>
                <p class="wow fadeInUp" data-wow-delay="0.8s">
                    One su razvrstane po statusu
                </p>
            </div>

        </div>
    </div>
</section>

<?php
include ('../includes/adminheader.php');
?>

<section id="menu" class="parallax-section">
    <div class="container">

        <div class="row" style="text-align: center">
            <h3>Narudžbe na čekanju:</h3>
            <div class="sekcija">

                    <p>Klijent</p>
                    <p>Adresa</p>
                    <p>Datum</p>
                    <p>Cijena</p>
                    <p>Status</p>
                    <p>Detalji</p>

            </div>

            <?php while($row=mysqli_fetch_assoc($query)): ?>
             <div class="sekcija">
                    <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                        <p><?= $row['Total'] ?></p>
                        <p><?= $row['Status']?></p>
                        <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                 </div>
            <?php endwhile; ?>

            </div>

            <div class="row" style="text-align: center">
                <h3>Narudžbe u slanju:</h3>
                <div class="sekcija">

                    <p>Klijent</p>
                    <p>Adresa</p>
                    <p>Datum</p>
                    <p>Cijena</p>
                    <p>Status</p>
                    <p>Detalji</p>

                </div>

                <?php while($row=mysqli_fetch_assoc($query2)): ?>
                    <div class="sekcija">
                        <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                        <p><?= $row['Total'] ?></p>
                        <p><?= $row['Status']?></p>
                        <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                    </div>
                <?php endwhile; ?>

            </div>

            <div class="row" style="text-align: center">
                <h3>Završene narudžbe:</h3>
                <div class="sekcija">

                    <p>Klijent</p>
                    <p>Adresa</p>
                    <p>Datum</p>
                    <p>Cijena</p>
                    <p>Status</p>
                    <p>Detalji</p>

                </div>

                <?php while($row=mysqli_fetch_assoc($query3)): ?>
                    <div class="sekcija">
                        <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                        <p><?= $row['Total'] ?></p>
                        <p><?= $row['Status']?></p>
                        <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                    </div>
                <?php endwhile; ?>

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