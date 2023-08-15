
    <!--BODY-->
    <div class="content">
        <div class="left_content"></div>
        <div class="main_content">
            <div class="conn_data" style="width: 945px; margin-top: 0;">
                <h2 style='font-weight: bold; color: SeaGreen;'>DANH MỤC CÁ KOI</h2>
                <?php
                $MaCa = 'Koi';
                session_start();
                include("Abstract_DanhMuc.php");
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
