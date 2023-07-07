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

		</div>
		<div class="span9">
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a> <span class="divider">/</span></li>
				<li><a href="products.html">Items</a> <span class="divider">/</span></li>
				<li class="active">Preview</li>
			</ul>
			<div class="well well-small">
				<div class="row-fluid">
					<div class="span5">
						<div id="myCarousel" class="carousel slide cntr">
							<div class="carousel-inner">
								<div class="item active">
									<a href="#"> <img src="assets/img/a.jpg" alt="" style="width:100%"></a>
								</div>
								<div class="item">
									<a href="#"> <img src="assets/img/b.jpg" alt="" style="width:100%"></a>
								</div>
								<div class="item">
									<a href="#"> <img src="assets/img/e.jpg" alt="" style="width:100%"></a>
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
						</div>
					</div>
					<div class="span7">
						<h3>Kemeja Polo</h3>
						<hr class="soft" />

						<?php
						// Periksa apakah tombol "Add to cart" ditekan
						if (isset($_POST['addToCart'])) {
							$email = $_SESSION['email']; // Ambil email pengguna yang sedang login
							$qty = $_POST['qty'];
							$color = $_POST['color'];
							$material = $_POST['material'];
							$harga = $_POST['harga'];

							// Query untuk memasukkan data ke tabel keranjang
							$sql = "INSERT INTO keranjang (email, qty, color, material, harga) VALUES ('$email', '$qty', '$color', '$material', '$harga')";

							if ($conn->query($sql) === TRUE) {
								echo '<div class="alert alert-success">Data berhasil ditambahkan ke keranjang! <a href="cart.php">Lihat Keranjang</a></div>';
							} else {
								echo '<div class="alert alert-danger">Error: ' . $conn->error . '</div>';
							}
						}

						// Menutup koneksi
						$conn->close();
						?>


						<form class="form-horizontal qtyFrm" method="post">
							<div class="control-group">
								<label class="control-label"><span>Rp131.908</span></label>
								<input type="hidden" name="harga" value="131908">
								<div class="controls">
									<input type="number" name="qty" class="span6" placeholder="Qty.">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label"><span>Color</span></label>
								<div class="controls">
									<select class="span11" name="color">
										<option>Red</option>
										<option>Purple</option>
										<option>Pink</option>
										<option>Red</option>
									</select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><span>Materials</span></label>
								<div class="controls">
									<select class="span11" name="material">
										<option>Katun</option>
										<option>Plastik</option>
									</select>
								</div>
							</div>
							<button type="submit" name="addToCart" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
						</form>
					</div>
				</div>
				<hr class="softn clr" />


				<ul id="productDetail" class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
					<li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#cat1" data-toggle="tab">Category one</a></li>
							<li><a href="#cat2" data-toggle="tab">Category two</a></li>
						</ul>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content tabWrapper">
					<div class="tab-pane fade active in" id="home">
						<h4>Product Information</h4>
						<table class="table table-striped">
							<tbody>
								<tr class="techSpecRow">
									<td class="techSpecTD1">Color:</td>
									<td class="techSpecTD2">Black</td>
								</tr>
								<tr class="techSpecRow">
									<td class="techSpecTD1">Style:</td>
									<td class="techSpecTD2">Apparel,Sports</td>
								</tr>
								<tr class="techSpecRow">
									<td class="techSpecTD1">Season:</td>
									<td class="techSpecTD2">spring/summer</td>
								</tr>
								<tr class="techSpecRow">
									<td class="techSpecTD1">Usage:</td>
									<td class="techSpecTD2">fitness</td>
								</tr>
								<tr class="techSpecRow">
									<td class="techSpecTD1">Sport:</td>
									<td class="techSpecTD2">122855031</td>
								</tr>
								<tr class="techSpecRow">
									<td class="techSpecTD1">Brand:</td>
									<td class="techSpecTD2">Shock Absorber</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-pane fade" id="profile">
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									....
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soft">
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soft" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soft" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="cat1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
						<br>
						<br>
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/b.jpg" alt="">
							</div>
							<div class="span6">
								<h5>LCD Fullset Vivo Y91/ Y91Y/ Y93/ Y95 Diamond ~ Fullset LCD + Touchscreen </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp131.908</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/a.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Kemeja Lengan Panjang Slimfit Reguler Kekibian Kemeja Kerja Putih </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp31.000</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />
					</div>
					<div class="tab-pane fade" id="cat2">

						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />
						<div class="row-fluid">
							<div class="span2">
								<img src="assets/img/d.jpg" alt="">
							</div>
							<div class="span6">
								<h5>Product Name </h5>
								<p>
									...
								</p>
							</div>
							<div class="span4 alignR">
								<form class="form-horizontal qtyFrm">
									<h3> Rp</h3>
									<label class="checkbox">
										<input type="checkbox"> Adds product to compair
									</label><br>
									<div class="btn-group">
										<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
										<a href="product_details.html" class="shopBtn">VIEW</a>
									</div>
								</form>
							</div>
						</div>
						<hr class="soften" />

					</div>
				</div>

			</div>
		</div>
	</div> <!-- Body wrapper -->

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