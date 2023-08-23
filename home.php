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
    session_start();
    include("taglib.php");
    ?>
    <!--CÂU CHÀO JS
    <script>
        alert("Chào mừng đến với Cá Cảnh Shop! Hãy đăng nhập để có trải nghiệm tốt hơn!");
    </script> -->
</head>
<body>

    <!--HEADER-->
    <?php
    if(isset($_SESSION['loged'])){
        include("header_user.php");
    } else {
        include("header.php");
    }
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