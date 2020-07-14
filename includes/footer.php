
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.3s">
                <img src="/pit/images/Pcelice&Teglice_LOGO_04.png" width="80%">
            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                <h3>Kontaktirajte nas</h3>
                <p>+387 (0)61 863 445</p>
                <p>info@pceliceiteglice.ba</p>
                <?php if(!isset($_SESSION['id'])) :?>
                    <p><a href="/pit/user/login.php">Login</a></p>
                <?php endif; ?>
                <?php if(isset($_SESSION['id'])) :?>
                    <p><a href="/pit/user/logout.php">Logout</a></p>
                    <p><a href="/pit/user/myaccount.php">My account</a></p>
                <?php endif; ?>

            </div>

            <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.5s">
                <h3>Radno vrijeme</h3>
                <strong>Ponedjeljak - Petak</strong>
                <p>08:00 - 16:00 </p>
                <strong>Subota - Nedjelja</strong>
                <p>10:00 - 16:00</p>
            </div>

        </div>
    </div>
</footer>