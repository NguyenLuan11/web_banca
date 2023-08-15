<?php
session_start();
include("connectdb.php");

if(isset($_POST["delete"])) {
    $id = $_GET["id"];
    
    // Thực hiện câu lệnh SELECT
    $sql = "SELECT MaCa FROM loai_ca WHERE id=$id";

    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $MaCa = $row["MaCa"];
            }
            // Giải phóng bộ nhớ của biến
            mysqli_free_result($result);
        }
    }
    
    // lệnh sql xóa 1 bản ghi
    $sql2 = "DELETE FROM loai_ca WHERE id= $id";
    
    if ($link->query($sql2) === TRUE) {
        echo "Record deleted successfully";
        header("location:admin_DM" . $MaCa. ".php");
    } else {
        echo "Error deleting record: " . $link->error;
    }
    
    $link->close();
}
?>