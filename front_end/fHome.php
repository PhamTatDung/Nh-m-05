
<?php
	include('../header.php');
	include('../menu-top.php');
	include('../menu.php');
	include('../slideshow.php');
?>
<?php
	$sql="SELECT * FROM sanpham WHERE noi_bat=1 ORDER BY id_sp DESC LIMIT 8";
	$query = mysqli_query($link, $sql);
?>

				<div id="wrap-inner">
					<div class="products">
						<h3>sản phẩm nổi bật</h3>
						<div class="product-list row">
					<?php
						while ($row=mysqli_fetch_array($query)) {
					?>
							<div class="product-item col-md-3 col-sm-6 col-xs-12">
								<a href="#">
									<img src="HondaPhoto/SanPhamMoi/<?php echo $row['anh_sp']; ?>" class="img-thumbnail">
								</a>
								<p>
									<a href="#"><?php echo $row['ten_sp'];?></a>
								</p>
								<p class="price"><?php echo $row['gia_sp'];?></p>	  
								<div class="marsk">
									<a href="chitietsanpham.php">Xem chi tiết</a>
								</div>                                    
							</div> 
					<?php
						}
					?>
					</div>                	                	
				</div>

				<div class="products">
					<h3>sản phẩm mới</h3>
					<div class="product-list row">
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m11.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m2.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m3.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m4.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m5.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m7.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#"><img src="HondaPhoto/SanPhamMoi/m8.jpg" class="img-thumbnail"></a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                        
						</div>
						<div class="product-item col-md-3 col-sm-6 col-xs-12">
							<a href="#">
								<img src="HondaPhoto/SanPhamMoi/m10.jpg" class="img-thumbnail">
							</a>
							<p>
								<a href="#">Ablade 125cc</a>
							</p>
							<p class="price">10.000.000</p>	  
							<div class="marsk">
								<a href="#">Xem chi tiết</a>
							</div>                      	                      
						</div> 
					</div>    
				</div>
<?php
	include('../footer.php');
?>