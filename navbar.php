<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <a class="active" href="index.html"></span>LEBIH MURAH DI APP</a>
                <a href="#"></span>MENJADI SELLER</a>
                <a href="#"></span>CUSTOMER CARE</a>
                <a href="#"></span>LACAK PESANAN</a>
                <?php if (!isset($_SESSION['email'])) : ?>
                    <a href="login.php"></span>LOGIN</a>
                <?php else : ?>
                    <a href="logout.php"></span>LOGOUT</a>
                <?php endif; ?>
                <a href="#"></span>DAFTAR</a>
            </div>
        </div>
    </div>
</div>