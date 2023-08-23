<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cá Cảnh Shop</title>
	<!--CSS-->
	<?php
	include("taglib.php");
	?>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-image: url('Image/background2.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}

		div.main_content {
			background-color: lightgreen;
			border: solid 1px;
			border-radius: 30px;
			padding: 30px;
			margin: 5% 3%;
		}

		div.main_content table {
			width: 1000px;
			text-align: center;
			margin: 0;
		}

		div.left_content {
			margin-top: 12.8%;
			margin-left: 1%;
		}

		div.left_content table {
			width: 100px;
			height: 100px;
			border-collapse: collapse;
			text-align: center;
			border-color: rgb(9, 83, 59);
			margin: 0;
			background-color: lightgreen;
		}
	</style>
</head>

<body>

	<?php
	include('connectdb.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
	$sl = (isset($_GET['sl'])) ? $_GET['sl'] : 1;
	//session_destroy();
	// die();
	// var_dump($action);
	// die();
	$query = mysqli_query($link, "SELECT * FROM loai_ca WHERE id = $id ");
	if ($query) {
		$product = mysqli_fetch_assoc($query);
	}
	$item = [
		'id' => $product['id'],
		'Image' => $product['Image'],
		'fish_name' => $product['fish_name'],
		'Color' => $product['Color'],
		'Price' => $product['Price'],
		'sl' => 1
	];


	if ($action == 'add') {
		if (isset($_SESSION['giohang'][$id])) {
			$_SESSION['giohang'][$id]['sl'] += 1;
		} else {
			$_SESSION['giohang'][$id] = $item;
		}
	}
	if ($action == 'update') {
		$_SESSION['giohang'][$id]['sl'];
	}
	if ($action == 'delete') {
		unset($_SESSION['giohang'][$id]);
	}
	//header('location:view_cart.php');
	// echo"<pre>";
	// print_r($_SESSION['giohang']);
	?>


	<?php

	$cart = (isset($_SESSION['giohang'])) ? $_SESSION['giohang'] : [];

	?>

	<div class="content" style="margin-bottom: 3%;">
		<div class="left_content">
			<table border="1">
				<tr style="color: rgb(225, 245, 42); background-color: #02323a;">
					<th>Chức năng</th>
				</tr>
				<tr>
					<td>
						<a href="home_user.php?quanly=buy"><ion-icon name="bag-check"></ion-icon> Mua hàng</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="view_cart.php"><ion-icon name="cart"></ion-icon> Giỏ hàng</a>
					</td>
				</tr>
			</table>
		</div>

		<div class="main_content">
			<h2>Giỏ hàng</h2>
			<table class='table' border="1">
				<tr style="color: rgb(225, 245, 42); background-color: #02323a;">
					<th>STT</th>
					<th>Hình ảnh</th>
					<th>Tên cá</th>
					<th>Màu sắc</th>
					<th>Số lượng</th>
					<th>Giá</th>
					<th>Thành tiền</th>
					<th>Remove</th>
				</tr>
				<?php $total_price = 0; ?>
				<?php foreach ($cart as $keys => $row) :
					$total_price += ($row['Price'] * $row['sl']);
				?>
					<tr>
						<td><?php echo $keys++ ?></td>
						<td style="padding: 0;"><img src="Image/<?php echo $row['Image']; ?>" width=140px height="140px"></td>
						<td><?php echo $row['fish_name'] ?></td>
						<td><?php echo $row['Color'] ?></td>
						<td>
							<form action="view_cart.php">
								<input type="hidden" name="action" value="update">
								<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
								<input type="text" name="sl" value="<?php echo $row['sl'] ?>">
								<button type="submit">Cập nhật</button>
							</form>
						</td>
						<td><?php echo $row['Price'] ?></td>
						<td><?php echo number_format($row['Price'] * $row['sl']) ?></td>
						<td>
							<a href="view_cart.php?id=<?php echo $row['id'] ?>&action=delete" class="btn btn-danger">Xóa</a>
						</td>
					</tr>
				<?php endforeach ?>
				<tr>
					<td>Tổng</td>
					<td colspan="7" class="text-center bg-info"><?php echo number_format($total_price) ?>VNĐ</td>
				</tr>
			</table>
		</div>

		<div class="right_content"></div>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>