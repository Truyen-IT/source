<?php

session_start();
?>
<nav class="navbar border-primary col-lg-4 ">
    <div class=" row border active  border-primary list-group">

        <ul class="nav navbar-nav border">
            <li class="active"><a href="<?php echo BASE_URL ?>/login/dashboart">Trang Chủ:<h3 class="text-success"><?php if(isset($_SESSION["dangnhap"])){
      echo $_SESSION["dangnhap"]; } ?></h3></a></li>

            <li class="dropdown  list-group-item-action">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh Mục Bài Viết
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>/post">Thêm</a></li>
                    <li><a href="<?php echo BASE_URL ?>/post/list_category">Liệt Kê</a></li>
                </ul>

            </li>
            <li class="dropdown list-group-item-action">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lí Bài Viết
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>/post/add_post">Thêm</a></li>
                    <li><a href="<?php echo BASE_URL ?>/post/list_post">Liệt Kê</a></li>
                    <!--no chay qua ben file product controoller-->
                </ul>

            </li>
            <li class="dropdown list-group-item-action">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Danh mục Sản Phẩm
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>/product">Thêm</a></li>
                    <li><a href="<?php echo BASE_URL ?>/product/list_category">Liêt Kê</a></li>
                    <!--no chay qua ben file product controoller-->
                </ul>

            </li>
            <li class="dropdown  list-group-item-action">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lí Sản Phẩm
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>/product/add_product">Thêm</a></li>
                    <li><a href="<?php echo BASE_URL ?>/product/list_product">Liệt Kê</a></li>

                </ul>

            </li>
            <li class="dropdown  list-group-item-action">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản Lí Đơn Hàng
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>/order">Liệt Kê</a></li>
                </ul>

            </li>

            <li class="dropdown list-group-item-action">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Đăng Kí Tài Khoản
                    <span class="caret"></span></a>
                <?php
                   $id="TRUYEN123";
                    if ($_SESSION["dangnhap"]==$id) { ?>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_URL ?>/product/dangki">Thêm Tài Khoản</a></li>
                    <li><a href="<?php echo BASE_URL ?>/product/list_taikhoan">Liệt Kê Tài Khoản</a></li>

                </ul>
                <?php } ?>

            </li>
            <li class="dropdown list-group-item-action ">
            <?php if (isset($_SESSION["dangnhap"])) { ?>
                <a class="dropdown-toggle" data-toggle="" href="<?php echo BASE_URL ?>/login/logout">Đăng Xuất

                    

                    <?php } else { ?>
                    <a href="<?php echo BASE_URL ?>/login/login">Đăng Nhập</a>


                    <?php } ?>
                   </a>
                

            </li>





        </ul>
    </div>
</nav>

