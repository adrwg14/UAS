<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "link.php"; ?>
	<?php if (!isset($_SESSION['email'])) {
		header('Location: login.php');
		exit;
	} else {
		echo $_SESSION['email'];
	} ?>
</head>

<body>
	<!-- 
	Upper Header Section 
-->
	<?php include "navbar.php"; ?>

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
		</header>


		<!-- 
Body Section 
-->
		<section>
			<div class="row">
				<div id="sidebar" class="span3">
					<div class="well well-small">
						<ul class="nav nav-list">
							<li><a href="products.html"><span class="icon-chevron-right"></span>Peralatan Elektronik</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Aksesoris Elektronik</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion & Aksesoris Wanita</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion & Aksesoris Pria</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Fashion & Aksesoris Anak</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Kesehatan & Kecantikan</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Bayi & Mainan</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>TV & Elektronik Rumah</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Keperluan Rumah & Gaya Hidup</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Kebutuhan Rumah Tangga</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Olahraga & Outdoor</a></li>
							<li><a href="products.html"><span class="icon-chevron-right"></span>Otomotif</a></li>
						</ul>
					</div>

				</div>
				<div class="span9">
					<div class="well np">
						<div id="myCarousel" class="carousel slide homCar">
							<div class="carousel-inner">
								<div class="item">
									<img style="max-width:max-content; height: 350px" src="assets/img/carousel1.png" alt="bootstrap ecommerce templates">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="item active">
									<img style="max-width:max-content; height: 350px" src="assets/img/carousel3.png" alt="bootstrap ecommerce templates">
									<div class="carousel-caption">
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
						</div>
					</div>

		</section>
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
								<li class="span8"><a href="list-view.html">Pulsa & Tagihan</a></li>
								<li class="span8"><a href="grid-view.html">Voucher Belanja</a></li>
								<li class="span8"><a href="three-col.html">LazBlog</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--
Flash Sale
-->
		<div class="well well-small">
			<h3>Flash Sale </h3>
			<hr class="soften" />
			<div class="row-fluid">
				<div id="newProductCar" class="carousel slide">
					<div class="carousel-inner">
						<div class="item active">
							<ul class="thumbnails">
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI </a>
										<a href="product_details.html"><img src="assets/img/b.jpg" alt=""></a>
										<div class="caption cntr">
											<p>LCD Fullset Vivo Y91/ Y91Y/ Y93/ Y95 Diamond ~ Fullset LCD + Touchscreen</p>
											<p><strong>Rp131.908</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/c.jpg" alt=""></a>
										<div class="caption cntr">
											<p>Sepatu anak terbaru 2022 sepatu anak laki-laki sepatu anak perempuan </p>
											<p><strong> Rp45.000</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/a.jpg" alt=""></a>
										<div class="caption cntr">
											<p>Kemeja Lengan Panjang Slimfit Reguler Kekibian Kemeja Kerja Putih</p>
											<p><strong>Rp31.000</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/s.png" alt=""></a>
										<div class="caption cntr">
											<p>Parayu Kids - Sepatu Sneakers Anak Import Terbaru 033</p>
											<p><strong>Rp82.711</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="item">
							<ul class="thumbnails">
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/i.jpg" alt=""></a>
										<div class="caption cntr">
											<p>Tas Sekolah Wanita Versi Ransel Korea Murah Tas Punggung Perempuan </p>
											<p><strong>Rp31.000</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/f1.jpg" alt=""></a>
										<div class="caption cntr">
											<p>Minyak Telon My Baby Kemasan 150ml Aroma Eucalyptus & Lavender</p>
											<p><strong>Rp23.800</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/h.jpg" alt=""></a>
										<div class="caption cntr">
											<p>ADJ-KEMEJA PRIA LENGAN PANJANG KEREN//KEMEJA KEKINIAN TERBARU</p>
											<p><strong>Rp60.000</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
								<li class="span3">
									<div class="thumbnail">
										<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
										<a href="product_details.html"><img src="assets/img/j.jpg" alt=""></a>
										<div class="caption cntr">
											<p>Gamis wanita dewasa terbaru 2022 bahan adem // Gamis anak perempuan </p>
											<p><strong>Rp60.000</strong></p>
											<h4><a class="shopBtn" href="product_details.php" title="add to cart"> BELI </a></h4>
											<div class="actionList">
												<a class="pull-left" href="#">Add to Wish List </a>
												<a class="pull-left" href="#"> Add to Compare </a>
											</div>
											<br class="clr">
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
					<a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
				</div>
			</div>
			<div class="row-fluid">
				<ul class="thumbnails">
					<li class="span4">
					</li>
					<li class="span4">
					</li>
					<li class="span4">
					</li>
				</ul>
			</div>
		</div>
		<!--
	Featured Products
	-->
		<div class="well well-small">
			<h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span class="icon-plus"></span></a>Paling Popular</h3>
			<hr class="soften" />
			<div class="row-fluid">
				<ul class="thumbnails">
					<li class="span5">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/d.jpg" alt=""></a>
							<div class="caption">
								<h5>Vivo Y15s</h5>
								<h5>
									<p> 18,505 Produk</p>
								</h5>
							</div>
						</div>
					</li>

					<li class="span2">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/1.jpg" alt="" /></a>
							<div class="caption">
								<h5>Topi Ny </h5>
								<h5>
									<p> 25,220 Produk</p>
								</h5>
							</div>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/4.jpg" alt="" /></a>
							<div class="caption">
								<h5>Talenan Kayu</h5>
								<h5>
									<p> 341 Produk</p>
								</h5>
							</div>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/3.jpg" alt=""></a>
							<div class="caption">
								<h5> Sampo Uban</h5>
								<h5>
									<p> 22,803 Produ</p>
								</h5>
							</div>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/2.jpg" alt="" /></a>
							<div class="caption">
								<h5>Catokan Mini</h5>
								<h5>
									<p> 5,523 Produk</p>
								</h5>
							</div>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/e.jpg" alt=""></a>
							<div class="caption">
								<h5> Speaker Mini</h5>
								<h5>
									<p> 78,724 Produk</p>
								</h5>
							</div>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
							<a href="product_details.html"><img src="assets/img/f.jpg" alt="" /></a>
							<div class="caption">
								<h5>Tas Tahan Air</h5>
								<h5>
									<p> 16,974 Produk</p>
								</h5>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>


		<div class="well well-small">
			<h3>Kategori</h3>
			<ul class="thumbnails">
				<li class="span2">
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
						<a href="product_details.html"><img src="assets/img/a1.jpg" alt=""></a>
						<div class="caption cntr">
							<p>Ransel Anak</p>
						</div>
					</div>
				</li>
				<li class="span2">
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
						<a href="product_details.html"><img src="assets/img/a2.jpg" alt=""></a>
						<div class="caption cntr">
							<p>Handphone</p>
						</div>
					</div>
				</li>
				<li class="span2">
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
						<a href="product_details.html"><img src="assets/img/a3.jpg" alt=""></a>
						<div class="caption cntr">
							<p>Hijab</p>
						</div>
					</div>
				</li>
				<li class="span2">
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
						<a href="product_details.html"><img src="assets/img/a4.jpg" alt=""></a>
						<div class="caption cntr">
							<p>Lipstik</p>
						</div>
					</div>
				</li>
				<li class="span2">
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> BELI</a>
						<a href="product_details.html"><img src="assets/img/a5.jpg" alt=""></a>
						<div class="caption cntr">
							<p>Wireless Earbud</p>
						</div>
					</div>
				</li>
			</ul>
		</div>

	</div>
	<!--
Footer
-->
	<footer class="footer">
		<div class="row-fluid">
			<div class="span3">
				<h5>Layanan Pelanggan</h5>
				<a href="#">Pusat Bantuan</a><br>
				<a href="#">Cara Pembelian</a><br>
				<a href="#">Pengiriman</a><br>
				<a href="#">Kebijakan Produk Internasional</a><br>
				<a href="#">Cara Pengembalian</a><br>
				<a href="#">Ada pertanyaan? Hubungi kami di live chat (24 Jam)</a><br>
			</div>

			<div class="span3">
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
				<span style="color: black;font-size:15px">Copyright &copy; 2023 Andy & Christian</span>
			</div>
		</div>
		<!-- /container -->


	</footer>
	<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="assets/js/shop.js"></script>
</body>

</html>