<form action="" method="post">
<div class="col-md-6 col-md-offset-3">
	<div class="alert alert-info">
		<strong>ĐĂNG KÝ TÀI KHOẢN</strong>
	</div>

	<div class="panel panel-primary">
	    <div class="panel-body">
	    	<div class="form-group">
				<label for="email">Tên tài khoản:</label>
				<input type="text" class="form-control" name="user_name" placeholder="Nhập tên tài khoản...">
			</div>

            <div class="form-group">
				<label for="email">Họ tên người dùng:</label>
				<input type="text" class="form-control" name="full_name" placeholder="Nhập họ tên người dùng...">
			</div>

			<div class="form-group">
				<label for="pwd">Mật khẩu:</label>
				<input type="password" class="form-control" name="pass1" placeholder="Nhập mật khẩu..." required>
			</div>

            <div class="form-group">
				<label for="pwd">Xác nhận mật khẩu:</label>
				<input type="password" class="form-control" name="pass2" placeholder="Xác nhận lại mật khẩu..." required>
			</div>

			<button type="submit" class="btn btn-info" name="register">Đăng ký</button>
			<button type="reset" class="btn btn-warning" name="reset">Đặt lại</button>
	    </div>
	</div>
</div>
</form>