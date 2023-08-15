                    <div class="conn_data" style="text-align: center;">
                        <table border="1" style="border-collapse: collapse;">
                            <tr style='color: rgb(225, 245, 42); background-color: #02323a;'>
                                <th style="text-align: center;">Hình ảnh</th>
                                <th style="text-align: center;">Tên loài cá</th>
                                <th style="text-align: center;">Màu Sắc</th>
                                <th style="text-align: center;">Mô tả</th>
                                <th style="text-align: center;">Nguồn gốc</th>
                                <th style="text-align: center;">Giá bán</th>
                                <th style="text-align: center;">Tùy chọn</th>
                            </tr>
                            <?php
                            include("connectdb.php");     
                
                                // Thực hiện câu lệnh SELECT
                                $sql = "SELECT id,MaCa,Image,fish_name,Color,Description,NguonGoc,Price FROM loai_ca WHERE MaCa='$MaCa'";

                                if ($result = mysqli_query($link, $sql)) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                            ?>          
                                    <tr>
                                        <td><img style="width: 110px; height: 120px;" src="Image/<?php echo $row['Image']; ?>"></td>
                                        <td style="width: 120px;"><?php echo $row['fish_name']; ?></td>
                                        <td><?php echo $row['Color']; ?></td>
                                        <td style="width: 600px;"><?php echo $row['Description']; ?></td>
                                        <td style="width: 72px;"><?php echo $row['NguonGoc']; ?></td>
                                        <td><?php echo number_format($row['Price'], 0, ',', '.') . 'vnd'; ?></td>
                                        <td style="width: 71px;">
                                            <form action="edit.php?id=<?php echo $row['id']; ?>" method="post">
                                                <button style="width: 39px;border: solid 1px; border-radius: 5px;" type="submit" name="edit">Sửa</button>
                                            </form>
                                            <br>
                                            <form action="Xoa.php?id=<?php echo $row['id']; ?>" method="post">
                                                <button style="width: 39px;border: solid 1px; border-radius: 5px;" type="submit" name="delete">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                        }
                                        // Giải phóng bộ nhớ của biến
                                        mysqli_free_result($result);
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="7">No Records.</td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
                                }
                                // Đóng kết nối
                                mysqli_close($link);
                            ?>
                        </table>
                    </div>