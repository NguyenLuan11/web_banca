    <div class="header">
        <h1>CÁ CẢNH SHOP</h1>
        <div class="btn">
            <div class="btn_submit">
                <button type="submit" style="padding: 0; border-radius: 50%; width: 36px; height: 35px; background-color: lightskyblue;">
                    <ion-icon style="width: 30px; height: 30px; margin: 0;" name="person-circle-sharp"></ion-icon>
                    <?php
                    if (isset($_SESSION['loged'])) {
                        echo 'Xin chào:' . '<span style="color:pink">' . $_SESSION['loged'] . '</span>';
                    }
                    ?>
                </button>
                    
                <button type="submit" style="background-color: orange; height: 35px;">
                    <a href="login_register.php?act=logout" onclick="alert('Bạn muốn đăng xuất?')">Đăng xuất</a>
                </button>
            </div>
        </div>
        <div id="container_menu">
            <nav>
                <ul>
                    <li><a href="home_user.php"><ion-icon name="home"></ion-icon> Home</a></li>
                    <li><a href="#"><ion-icon name="fish"></ion-icon> Dòng cá</a>
                        <!-- First Tier Drop Down -->
                        <ul>
                            <li><a href="#">Betta</a>
                                <ul>
                                    <li><a href="home_user.php?quanly=TT_Betta">Thông Tin</a></li>
                                    <li><a href="home_user.php?quanly=DM_Betta">Danh mục</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Guppy</a>
                                <ul>
                                    <li><a href="home_user.php?quanly=TT_Guppy">Thông Tin</a></li>
                                    <li><a href="home_user.php?quanly=DM_Guppy">Danh mục</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Cá rồng</a>
                                <ul>
                                    <li><a href="home_user.php?quanly=TT_CaRong">Thông Tin</a></li>
                                    <li><a href="home_user.php?quanly=DM_CaRong">Danh mục</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Thủy sinh</a>
                                <ul>
                                    <li><a href="home_user.php?quanly=TT_ThuySinh">Thông Tin</a></li>
                                    <li><a href="home_user.php?quanly=DM_ThuySinh">Danh mục</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Koi</a>
                                <ul>
                                    <li><a href="home_user.php?quanly=TT_Koi">Thông Tin</a></li>
                                    <li><a href="home_user.php?quanly=DM_Koi">Danh mục</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Lóc cảnh</a>
                                <ul>
                                    <li><a href="home_user.php?quanly=TT_LocCanh">Thông Tin</a></li>
                                    <li><a href="home_user.php?quanly=DM_LocCanh">Danh mục</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><ion-icon name="mail"></ion-icon> Contact</a></li>
                    <li><a href="#"><ion-icon name="business"></ion-icon> About</a></li>
                    <li><a href="home_user.php?quanly=buy"><ion-icon name="bag-check"></ion-icon> Mua hàng</a></li>
                    <li style="margin-left: 35%;">
                        <form action="home_user.php?quanly=search" method="post">
                            <input type="search" placeholder="Tìm kiếm!" name="search" style="width: 200px;">
                            <button class="btn_search" type="submit" name="btn_search" style="padding: 0; width: 27px; height: 25px; margin-left: 0;">
                                <ion-icon name="search-sharp"></ion-icon>
                            </button>
                        </form>
                    </li>
                    <li><a href="view_cart.php"><ion-icon name="cart"></ion-icon></a></li>
                </ul>
            </nav>
        </div>
    </div>