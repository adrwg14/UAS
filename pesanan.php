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
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Pesanan Saya </li>
                </ul>
                <div class="well well-small">
                    <h1>Pesanan Saya <small class="pull-right">@<b><?= $_SESSION['email']; ?></b></small></h1>
                    <hr class="soften" />

                    <?php
                    // Ambil email pengguna yang sedang login
                    $email = $_SESSION['email'];

                    // Query untuk mendapatkan data dari tabel keranjang
                    $sql = "SELECT * FROM keranjang WHERE email = '$email' AND status IS NOT NULL";
                    $result = $conn->query($sql);
                    ?>

                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $total = $row['harga'] * $row['qty'];
                            ?>
                                    <tr>
                                        <td><?php echo "Kemeja Polo" ?></td>
                                        <td>Rp<?php echo number_format($row['harga'], 2, ',', '.'); ?></td>
                                        <td><?php echo $row['qty']; ?></td>
                                        <td>Rp<?php echo number_format($total, 2, ',', '.'); ?></td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<tr><td colspan="5">Keranjang kosong</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table><br />

                    <!-- <table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<form class="form-inline">
										<label style="min-width:159px"> VOUCHERS Code: </label>
										<input type="text" class="input-medium" placeholder="CODE">
										<button type="submit" class="shopBtn"> ADD</button>
									</form>
								</td>
							</tr>

						</tbody>
					</table> -->
                    <!-- <table class="table table-bordered">
						<tbody>
							<tr>
								<td>ESTIMATE YOUR SHIPPING & TAXES</td>
							</tr>
							<tr>
								<td>
									<form class="form-horizontal">
										<div class="control-group">
											<label class="span2 control-label" for="inputEmail">Country</label>
											<div class="controls">
												<input type="text" placeholder="Country">
											</div>
										</div>
										<div class="control-group">
											<label class="span2 control-label" for="inputPassword">Post Code/ Zipcode</label>
											<div class="controls">
												<input type="password" placeholder="Password">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="shopBtn">Click to check the price</button>
											</div>
										</div>
									</form>
								</td>
							</tr>
						</tbody>
					</table> -->
                    <!-- <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a> -->
                    <!-- <a href="login.html" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a> -->

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