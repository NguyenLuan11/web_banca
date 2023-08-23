<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cá Cảnh Shop</title>
    <!--CSS-->
    <?php
    include("taglib.php");
    ?>
    <!--CÂU CHÀO JS-->
    <!-- <script>
        alert("Chào mừng đến với Cá Cảnh Shop! Bạn đã đăng nhập thành công!");
    </script> -->
</head>
<body>
    <!--HEADER-->
    <?php
    include("header_user.php");
    ?>

    <!--BODY-->
    <?php
    include("main.php");
    ?>
    
    <!--FOOTER-->
    <?php
    include("footer.php");
    ?>
</body>
</html>