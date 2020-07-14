<?php
include('../includes/db.php');
session_start();

$order=$_GET['id'];

if(is_null($order)){
    header('Location: ../error.php');
}

if(!isset($_SESSION['id']) and !isset($_SESSION['vaucher'])){
    header('Location: ../error.php');
    exit();
}
unset($_SESSION['vaucher']);

$query=mysqli_query($conn, 'select * from orders where OID='.$order);
$query2=mysqli_query($conn, 'select * from order_line where OrderID='.$order);
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
    <link rel="stylesheet" href="../css/cart.css">

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
<?php if(isset($_SESSION['id'])){ ?>
<!-- Video section -->
<section id="video" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <h2 class="wow fadeInUp" data-wow-delay="0s">Ovdje se nalaze sve narudžbe </h2>
                <p class="wow fadeInUp" data-wow-delay="0s">
                    One su razvrstane po statusu
                </p>
            </div>

        </div>
    </div>
</section>

<?php
include ('../includes/adminheader.php');
?>
<?php } ?>

<section id="menu" class="parallax-section">
    <div class="container">

        <div class="row" style="text-align: center">
            <h3>Informacije o klijentu:</h3>
            <div class="sekcija">
                <p>Ime</p>
                <p>Prezime</p>
                <p>Adresa</p>
                <p>Grad</p>
                <p class="large">Telefon</p>
                <p class="large">Email</p>
            </div>

            <?php while($row=mysqli_fetch_assoc($query)): ?>
                <div class="sekcija">
                    <p><?= $row['FNAME'] ?></p>
                    <p><?= $row['LNAME'] ?></p>
                    <p><?= $row['Address']?></p>
                    <p><?= $row['City']?></p>
                    <p class="large"><?= $row['Phone'] ?></p>
                    <p class="large"><?= $row['email']?></p>
                </div>
                <h3>Vrijeme: <?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></h3>
                <h3>Status : <?= $row['Status']?></h3>
                <h3>Napomena: <?= $row['Extra']?></h3>
                <h3>Jedinstveni broj: <?= $row['ORDERNO']?></h3>

            <?php
            endwhile; ?>
            <?php if(isset($_SESSION['id'])){ ?>

            <p>Promijeni status: </p>
            <form action="changestatus.php?id=<?=$order?>" method="post">
                <select name="status" id="status" required>
                        <option value="" selected disabled hidden>Odaberite status</option>
                        <option value="cekanje">Čekanje</option>
                        <option value="poslano">Poslano</option>
                          <option value="zavrseno">Završeno</option>
                </select>
                <input type="submit" value="Promijeni">
            </form>
            <?php } ?>
        </div>


    </div>
</section>


<!-- Menu section -->
<section id="menu" class="parallax-section" style="padding-top: 0">
    <div class="container">

        <?php
            $total=0;
            ?>

            <div class="row">

                <div class="lista">

                    <h3 style="text-align: center; width: 100%; margin-bottom: 30px">Informacije o proizvodima:</h3>

                    <div class="wow fadeInUp proizvod2" data-wow-delay="0s">

                        <h3 class="media-heading" style="width: 20%">Naziv</h3>
                        <h3 id="formkolicina" class="media-heading" style="width: 15%">Količina </h3>
                        <h3 class="media-heading ">Cijena</h3>

                    </div>

                    <?php while($row2=mysqli_fetch_assoc($query2)): ?>
                        <div class="wow fadeInUp proizvod2" data-wow-delay="0s">

                            <?php
                            $query3 = mysqli_query($conn, "select * from items where ID ='{$row2['ItemID']}'");
                            $row3= mysqli_fetch_assoc($query3);
                            $total_price=0;
                            $total_price+=$row2['Price']*$row2['Quantity'];
                            $total+=$total_price;
                            ?>

                            <h3 class="media-heading" style="width: 20%"><?= $row3['Name'] ?></h3>
                            <h3 id="formkolicina" class="media-heading"><?= $row2['Quantity'] ?></h3>
                            <h3 class="media-heading "><?= $total_price ?>KM</h3>


                        </div>
                    <?php endwhile; ?>

                    <div class="wow fadeInUp proizvod2" data-wow-delay="0s">

                        <h3 class="media-heading" style="width: 20%">Ukupno: </h3>
                        <h3 id="formkolicina" class="media-heading" style="width: 15%"> <?= $total ?> KM </h3>

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