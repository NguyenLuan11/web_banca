<?php
/*Kết nối máy chủ MySQL. Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu)*/
$link = mysqli_connect("localhost", "root", "", "web_banca");

// Kểm tra kết nối
if ($link === false) {
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}

// Thực hiện câu lệnh SELECT
$sql = "SELECT id,Image,fish_name,Color,Description,NguonGoc,Price FROM loai_ca WHERE MaCa='$MaCa'";

// echo "<table class='table_data' border='1' style='border: solid 1px black; margin: 20px; text-align: center;'>";
// echo "<tr style='color: rgb(225, 245, 42); background-color: #02323a;'><th>Image</th><th>Name</th><th>Color</th><th>Description</th><th>Origin</th><th>Price</th></tr>";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
?>
        <form action="view_cart.php?id=<?php echo $row['id']; ?>" method="post">
            <div class="data">
                <ul style="padding: 0;">
                    <li>
                        <img src="Image/<?php echo $row['Image']; ?>">
                        <br>
                        <button type="submit" name="action"><ion-icon name="cart"></ion-icon> Mua hàng</button>
                        <br>
                        Tên: <?php echo $row['fish_name']; ?>
                        <br>
                        Màu sắc: <?php echo $row['Color']; ?>
                        <br>
                        Nguồn gốc: <?php echo $row['NguonGoc']; ?>
                        <br>
                        Giá bán: <?php echo number_format($row['Price'], 0, ',', '.') . 'vnd'; ?>
                    </li>
                </ul>
            </div>
        </form>
            <!-- <tr>
                    <td>
                        <img style="width: 140px; height: 140px" src="Image/<?php echo $row['Image']; ?>">
                        <br>
                        <a href="main.php?action=detail&id=$id" title="Mua hàng"><ion-icon name="cart"></ion-icon> Mua hàng</a>
                    </td>
                    <td><?php echo $row['fish_name']; ?></td>
                    <td><?php echo $row['Color']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td><?php echo $row['NguonGoc']; ?></td>
                    <td><?php echo $row['Price'] . "VNĐ"; ?></td>
                </tr> -->
        <?php
        }
        // Giải phóng bộ nhớ của biến
        mysqli_free_result($result);
    } else {
        ?>
        <tr>
            <td colspan="6">No Records.</td>
        </tr>
<?php
    }
} else {
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
// Đóng kết nối
mysqli_close($link);

// echo "</table>";
?>