<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="/pit/index.php" class="navbar-brand">Pčelice & Teglice</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/pit/index.php" class="smoothScroll">Naslovna</a></li>
                <li><a href="/pit/shop.php" class="smoothScroll">Shop</a></li>
                <li><a href="/pit/cart.php" class="smoothScroll">Korpica
                        <?php if(isset($_SESSION['total'])): ?>
                            (<?=$_SESSION['total']?>KM)
                        <?php endif; ?>
                    </a></li>
                <li><a href="/pit/contact.php" class="smoothScroll">Kontakt</a></li>
                <li><a href="/pit/orders/inputorder.php" class="smoothScroll">Provjeri narudžbu</a></li>

                <?php
                if(isset($_SESSION['id'])) :?>
                    <li><a href="/pit/user/logout.php">Logout</a></li>
                    <li><a href="/pit/user/myaccount.php">My account</a></li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</div>
