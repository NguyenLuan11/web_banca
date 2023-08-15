<div class="content" style="margin-top: 2.1%;">
    <div class="left_content" style="width: 80px;"></div>
    <div class="main_content" style="width: 950px;">
        <div class="conn_data" style="width: 950px; margin: 0;">
<?php
include('connectdb.php');

if(isset($_POST['btn_search'])){
    $search = $_POST['search'];
} else {
    echo $search = false;
}
$sql = "SELECT * FROM loai_ca WHERE fish_name LIKE '%$search%' OR MaCa LIKE '%$search%'";
echo "<h3>Từ khóa: <i>$search</i></h3>";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
    ?>
                <form action="themgiohang.php?id=<?php echo $row['id']; ?>" method="post">
                    <div class="data">
                        <ul style="padding: 0;">
                            <li>
                                <img src="Image/<?php echo $row['Image']; ?>">
                                <br>
                                <button type="submit" name="themgiohang"><ion-icon name="cart"></ion-icon> Mua hàng</button>
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
<?php
                }
                        // Giải phóng bộ nhớ của biến
                        mysqli_free_result($result);
                    } else {
                        ?>
                        <tr>
                            <td colspan="5"><i>Không tìm thấy kết quả nào!</i></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
                }
                // Đóng kết nối
                mysqli_close($link);    
?>
        </div>
    </div>
    <div class="right_content" style="width: 80px;"></div>
</div>