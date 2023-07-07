<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "link.php"; ?>
</head>

<body>


	<!--
Lower Header Section 
-->
	<div class="container">
		<div id="gototop"> </div>
		<header id="header">
			<div class="row">
				<div class="span4">
					<h1>
						<a class="logo" href="index.html"><span>Twitter Bootstrap ecommerce template</span>
							<img src="assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
						</a>
					</h1>
				</div>
			</div>
	</div>
	</header>

	<!--
Navigation Bar Section 
-->
	<section>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="span8"><a href="index.html">LazMall</a></li>
							<li class="span8"><a href="list-view.html">Pulsa &amp; Tagihan</a></li>
							<li class="span8"><a href="grid-view.html">Voucher Belanja</a></li>
							<li class="span8"><a href="three-col.html">LazBlog</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 
Body Section 
-->
	<div class="row">
		<div id="sidebar" class="span3">
			<div class="well well-small">
				<ul class="nav nav-list">
					<li><a href="products.html"><span class="icon-chevron-right"></span>Peralatan Elektronik</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Aksesoris Elektronik</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion &amp; Aksesoris Wanita</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion &amp; Aksesoris Pria</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion &amp; Aksesoris Anak</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Kesehatan &amp; Kecantikan</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Bayi &amp; Mainan</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>TV &amp; Elektronik Rumah</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Keperluan Rumah &amp; Gaya Hidup</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Kebutuhan Rumah Tangga</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Olahraga &amp; Outdoor</a></li>
					<li><a href="products.html"><span class="icon-chevron-right"></span>Otomotif</a></li>
					<li style="border:0"> &nbsp;</li>
				</ul>
			</div>

			<div class="well well-small alert alert-warning cntr">
				<h2>50% Discount</h2>
				<p>
					only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				</p>
			</div>
			<div class="well well-small"><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>

			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
				<li style="border:0"> &nbsp;</li>
				<li>
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
						<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
						<div class="caption">
							<h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">Rp</span></h4>
						</div>
					</div>
				</li>
				<li style="border:0"> &nbsp;</li>
			</ul>

		</div>
		<div class="span9">
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a> <span class="divider">/</span></li>
				<li class="active">Login</li>
			</ul>
			<h3> Login</h3>
			<hr class="soft" />

			<?php
			// Periksa apakah tombol register ditekan
			if (isset($_POST['register'])) {
				// Ambil data dari form
				$email = $_POST['email'];
				$password = $_POST['password'];

				// Hash password menggunakan fungsi password_hash() sebelum menyimpannya ke database
				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

				$sql = "INSERT INTO user (email, password) VALUES ('$email', '$hashedPassword')";
				if ($conn->query($sql) === TRUE) {
					echo '<div class="alert alert-success">Registrasi berhasil!</div>';
				} else {
					echo '<div class="alert alert-danger">Error: ' . $conn->error . '</div>';
				}
				$conn->close();
			}

			// Periksa apakah tombol sign in ditekan
			if (isset($_POST['signin'])) {
				// Ambil data dari form
				$email = $_POST['email'];
				$password = $_POST['password'];

				// Cari data user berdasarkan email
				$sql = "SELECT * FROM user WHERE email = '$email'";
				$result = $conn->query($sql);

				if ($result->num_rows == 1) {
					// Jika user ditemukan, verifikasi password
					$row = $result->fetch_assoc();
					$hashedPassword = $row['password'];

					if (password_verify($password, $hashedPassword)) {
						// Password cocok, set session email dan alihkan ke halaman index.php
						$_SESSION['email'] = $email;
						echo "<script>window.location.href='index.php';</script>";
						exit;
					} else {
						// Password tidak cocok
						echo '<div class="alert alert-danger">Password yang Anda masukkan salah!</div>';
					}
				} else {
					// User tidak ditemukan
					echo '<div class="alert alert-danger">User tidak ditemukan!</div>';
				}
				$conn->close();
			}
			?>


			<div class="row">
				<div class="span4">
					<div class="well">
						<h5>CREATE YOUR ACCOUNT</h5><br />
						<form method="post">
							<div class="control-group">
								<label class="control-label" for="inputEmail">E-mail address</label>
								<div class="controls">
									<input class="span3" type="text" placeholder="Email" name="email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputEmail">Password</label>
								<div class="controls">
									<input class="span3" type="password" placeholder="Password" name="password">
								</div>
							</div>
							<div class="controls">
								<button type="submit" name="register" class="btn block">Create Your Account</button>
							</div>
						</form>
					</div>
				</div>
				<div class="span1"> &nbsp;</div>
				<div class="span4">
					<div class="well">
						<h5>ALREADY REGISTERED ?</h5>
						<form method="post">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Email</label>
								<div class="controls">
									<input class="span3" type="text" placeholder="Email" name="email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password</label>
								<div class="controls">
									<input type="password" class="span3" placeholder="Password" name="password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" name="signin" class="defaultBtn">Sign in</button> <a href="#">Forget password?</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--
Footer
-->
	<footer class="footer">
		<div class="row-fluid">
			<div class="span4">
				<h5>Layanan Pelanggan</h5>
				<a href="#">Pusat Bantuan</a><br>
				<a href="#">Cara Pembelian</a><br>
				<a href="#">Pengiriman</a><br>
				<a href="#">Kebijakan Produk Internasional</a><br>
				<a href="#">Cara Pengembalian</a><br>
				<a href="#">Ada pertanyaan? Hubungi kami di live chat (24 Jam)</a><br>
			</div>

			<div class="span4">
				<h5>Jelajahi Lazada</h5>
				<a href="#">Semua Kategori</a> <br>
				<a href="#">Tentang Lazada</a><br>
				<a href="#">Afﬁliate Program</a><br>
				<a href="#">Karir</a><br>
				<a href="#">Syarat & Ketentuan</a> <br />
				<a href="#">Kebijakan Privasi</a><br>
				<a href="#">Press & Media</a><br>
				<a href="#">Jual Di Lazada</a><br>
				<a href="#">Lazada Security</a><br>
				<a href="#">Intellectual Property Protection</a><br>
			</div>
		</div>
	</footer>
	</div><!-- /container -->

	<div class="copyright">
		<div class="container">
			<h5 style="color: black;text-align:right"> Metode Pembayaran</h5>
			<p class="pull-right">
				<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
				<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
				<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
				<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
				<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
			</p>
			<span>Copyright &copy; 2023 Andy & Christian</span>
		</div>
	</div>
	<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="assets/js/shop.js"></script>
</body>

</html>