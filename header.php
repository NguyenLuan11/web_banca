    <div class="header">
        <h1>CÁ CẢNH SHOP</h1>
        <div class="btn">
            <div class="btn_submit">
                <button type="submit" style="background-color: orangered; height: 35px;">
                    <a href="login_register.php?page=register">Đăng ký</a>
                </button>
                    
                <button type="submit" style="background-color: orange; height: 35px;">
                    <a href="login_register.php">Đăng nhập</a>
                </button>
            </div>
        </div>
        <div id="container_menu">
            <nav>
                <ul>
                    <li><a href="home.php"><ion-icon name="home"></ion-icon> Home</a></li>
                    <li><a href="#"><ion-icon name="mail"></ion-icon> Contact</a></li>
                    <li><a href="#"><ion-icon name="business"></ion-icon> About</a></li>
                    <li><a href="home.php?quanly=buy"><ion-icon name="bag-check"></ion-icon> Mua hàng</a></li>
                    <li style="margin-left: 45%;">
                        <form action="home.php?quanly=search" method="post">
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