<?php
$connect = mysqli_connect('localhost', 'root', '', 'accounts');
mysqli_set_charset($connect, "utf8");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login</title>
	<style>
		body {
			background-image: url("Image/background3.jpg");
			background-size: cover;
		}
	</style>
</head>
<body>

    <!-- 'start thực hiện kiểm tra dữ liệu người dùng đăng ký' -->
    <?php
		if(isset($_POST["register"])){
			$user_name = $_POST["user_name"];
			$pass1 = $_POST["pass1"];
			$pass2 = $_POST["pass2"];
			$name = $_POST["full_name"];
			//kiểm tra xem 2 mật khẩu có giống nhau hay không:
			if($pass1!=$pass2){
				header("location:login_register.php?page=register");
				setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0);
			}
			else{
				$pass = $pass1;
				mysqli_query($connect,"insert into users (user_name,password,full_name)
					values ('$user_name','$pass','$name')");
				header("location:login_register.php?page=register");
				setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
			}
		}

	?>
	<!-- 'end thực hiện kiểm tra dữ liệu người dùng đăng ký' -->

	<!-- Logout -->
	<?php
		if(isset($_POST["logout"])) {
			$_SESSION["loged"] = null;
			header("location:home.php");
		}
	?>
    
    <!-- 'start thực hiện kiểm tra dữ liệu người dùng nhập ở form đăng nhập' -->
    <?php
		if(isset($_POST["dangnhap"])){
			$tk = $_POST["user_name_lg"];
			$mk = $_POST["passlg"];
			$rows = mysqli_query($connect,"select * from users where user_name = '$tk' and password = '$mk'");
			$count = mysqli_num_rows($rows);

			$rows2 = mysqli_query($connect,"select * from admins where admin_name = '$tk' and password = '$mk'");
			$count2 = mysqli_num_rows($rows2);
		
			if($count==1){
				$_SESSION["loged"] = $tk;
				header("location:home_user.php");
				setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
			}
			elseif($count2==1) {
				$_SESSION["loged"] = $tk;
				header("location:admin.php");
				setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
			}
			else{
				header("location:login_register.php");
				setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
			}
			
		}
	?>
	<!-- 'end thực hiện kiểm tra dữ liệu người dùng nhập ở form đăng nhập' -->



	<div class="container">
		<div class="row">
			<a href="home.php" class="btn btn-success">Trang chủ</a>
			<a href="login_register.php?page=register" class="btn btn-info">Đăng ký</a>
			<a href="login_register.php" class="btn btn-primary">Đăng nhập</a>
			<?php 
			if(isset($_SESSION["loged"])) {
				echo "<a href='login_register.php?act=logout' class='btn btn-danger'>Đăng xuất</a>";
			}
			?>
		</div>

		<div class="row">
			<!-- 'start nếu xảy ra lỗi thì hiện thông báo:' -->
			<?php
				if(isset($_COOKIE["error"])){
					
			?>
			<div class="alert alert-danger">
			  	<strong>Có lỗi!</strong> <?php echo $_COOKIE["error"]; ?>
			</div>
			<?php } ?>
			<!-- 'end nếu xảy ra lỗi thì hiện thông báo:' -->


			<!-- 'start nếu thành công thì hiện thông báo:' -->
			<?php
				if(isset($_COOKIE["success"])){
			?>
			<div class="alert alert-success">
			  	<strong>Chúc mừng!</strong> <?php echo $_COOKIE["success"]; ?>
			</div>
			<?php } ?>
			<!-- 'end nếu thành công thì hiện thông báo:' -->
			
			<?php
			//nếu tồn tại biến $_GET["page"] = "register" thì gọi trang đăng ký:
			if(isset($_GET["page"])&&$_GET["page"]=="register")
				include "register.php";

			//nếu không tồn tại biến $_GET["page"] = "register"
			if(!isset($_GET["page"])){
				//nếu tồn tại biến session $_SESSION["loged"] thì gọi nội dung trang home_user.php vào
				if(isset($_SESSION["loged"]))
					include "home_user.php";
				//nếu không tồn tại biến session $_SESSION["loged"] thì gọi nội dung trang login.php vào
				else
					include "login.php";
			}
			?>
		</div>
	</div>    

</body>
</html>