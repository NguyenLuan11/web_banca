    
<div class="content" style="margin: 1% 0 0 0;">
    <div class="left_content"></div>

    <div class="main_content">

        <div class="slideimg">
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide"><img src="Image/r_img.jpg" alt=""></div>
                    <div class="slide"><img src="Image/betta_mai.webp" alt=""></div>
                    <div class="slide"><img src="Image/r_img2.jpg" alt=""></div>
                    <div class="slide"><img src="Image/ho-ca-7-mau.jpg" alt=""></div>
                    <div class="slide"><img src="Image/r_img4.jpg" alt=""></div>
                </div>
            </div>
        </div>
        
        <br>
        <div class="conn_data" style="width: 945px; margin-top: 0;">
            <h2 style='font-weight: bold; color: SeaGreen;'>DANH MỤC CÁC LOẠI CÁ CẢNH</h2>
            <?php
            include("connectdb.php");     
 
                // Thực hiện câu lệnh SELECT
                $sql = "SELECT id,Image,fish_name,Color,Description,NguonGoc,Price FROM loai_ca";

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
            <?php
                        }
                        // Giải phóng bộ nhớ của biến
                        mysqli_free_result($result);
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">No Records.</td>
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

        <div class="slideimg">
            <div id="slideshow">
                <div class="slide-wrapper">
                    <div class="slide"><img src="Image/phukien/phu-kien.jpg" alt=""></div>
                    <div class="slide"><img src="Image/phukien/phu-kien1.jpg" alt=""></div>
                    <div class="slide"><img src="Image/phukien/phu-kien2.jpg" alt=""></div>
                    <div class="slide"><img src="Image/phukien/phu-kien3.jpg" alt=""></div>
                    <div class="slide"><img src="Image/phukien/phu-kien4.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="right_content">
        <?php
        include('right_content.php');
        ?>
    </div>
</div>