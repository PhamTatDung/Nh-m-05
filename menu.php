<div id="body">
	<div class="container">
		<div class="row">
<?php
	$sql="SELECT * FROM danhmucsanpham";
	$query=mysqli_query($link, $sql);
?>
			<div id="menu-cat" class="col-md-3 col-sm-12 col-xs-12">
				<ul>
					<li><h4>Danh Mục Sản Phẩm</h4></li>
					<?php
						while($row=mysqli_fetch_array($query)){
					?>
					<li><a href="danhsachsanpham.php";><?php echo $row['ten_dm'];?></a></li>
					<?php
						}
					?>
				</ul>	
			</div>
			