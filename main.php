<?php
    session_start();

    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if($tam == 'giohang'){
        include("view_cart.php");
    }
    elseif($tam == 'buy'){
        include("buy.php");
    }
    elseif($tam == 'search'){
        include("viewsearch.php");
    }

    elseif($tam == 'DM_Betta'){
        include("DanhMuc_Betta.php");
    }
    elseif($tam == 'DM_CaRong'){
        include("DanhMuc_CaRong.php");
    }
    elseif($tam == 'DM_Guppy'){
        include("DanhMuc_Guppy.php");
    }
    elseif($tam == 'DM_Koi'){
        include("DanhMuc_Koi.php");
    }
    elseif($tam == 'DM_LocCanh'){
        include("DanhMuc_LocCanh.php");
    }
    elseif($tam == 'DM_ThuySinh'){
        include("DanhMuc_ThuySinh.php");
    }

    elseif($tam == 'TT_Betta'){
        include("ThongTin_Betta.php");
    }
    elseif($tam == 'TT_CaRong'){
        include("ThongTin_CaRong.php");
    }
    elseif($tam == 'TT_Guppy'){
        include("ThongTin_Guppy.php");
    }
    elseif($tam == 'TT_Koi'){
        include("ThongTin_Koi.php");
    }
    elseif($tam == 'TT_LocCanh'){
        include("ThongTin_LocCanh.php");
    }
    elseif($tam == 'TT_ThuySinh'){
        include("ThongTin_ThuySinh.php");
    }
    else {
        include("mainbody.php");
    }
    
?>