<?php
include('../header.php');
include('../menu-top.php');
include('../menu.php');
include('../slideshow.php');
?>
<div id="wrap-inner">
	<div id="list-cart">
		<h3>Giỏ hàng</h3>
		<form>
			<table class="table table-bordered .table-responsive text-center">
				<tr class="active">
					<td width="11%">Ảnh mô tả</td>
					<td width="22%">Tên sản phẩm</td>
					<td width="22%">Số lượng</td>
					<td width="17%">Đơn giá</td>
					<td width="17%">Thành tiền</td>
					<td width="11%">Xóa</td>
				</tr>
				<tr>
					<td class="sttd"><img class="img-responsive" src="HondaPhoto/SanPhamMoi/m7.jpg"></td>
					<td class="sttd">Ablade 125cc</td>
					<td>
						<div class="form-group">
							<input class="form-control" type="number">
						</div>
					</td>
					<td class="sttd"><span class="price">6.590.000 đ</span></td>
					<td class="sttd"><span class="price">6.590.000 đ</span></td>
					<td class="sttd"><a href="#" class="xoa">Xóa</a></td>
				</tr>
			</table>
			<div class="row" id="total-price">
				<div class="col-md-6 col-sm-12 col-xs-12">				
					Tổng thanh toán:
					<span class="total-price">6.590.000 đ</span>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="#" class="my-btn btn">Mua tiếp</a>
					<a href="#" class="my-btn btn">Cập nhật</a>
					<a href="#" class="my-btn btn">Xóa giỏ hàng</a>
				</div>
			</div>
		</form>             	                	
	</div>

	<div id="xac-nhan">
		<h3>Xác nhận mua hàng</h3>
		<form>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input required type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="name">Họ và tên:</label>
				<input required type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="phone">Số điện thoại:</label>
				<input required type="number" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="add">Địa chỉ:</label>
				<input required type="text" class="form-control" id="add" name="add">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-default btn-xn">Thực hiện đơn hàng</button>
			</div>
		</form>
	</div>
</div>

<?php
include('../footer.php');
?>