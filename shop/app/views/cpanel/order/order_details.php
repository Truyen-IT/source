<div class="container">

    <table class="table">
        <h1>Liệt Kê Chi Tiết Đơn Hàng</h1>
        <thead>

            <tr>

                <th>Khách Hàng</th>
                <th>Điện Thoại</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Nội Dung</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        $i=0;
     

        foreach($order_info as $key=>$ord){
          
            $i++;
            
        
        ?>
            <tr>

                <td><?php echo $ord['name'] ?></td>
                <td><?php echo $ord['sodienthoai'] ?></td>
                <td><?php echo $ord['email'] ?></td>
                <td><?php echo $ord['diachi'] ?></td>
                <td><?php echo $ord['noidung'] ?></td>


                <td></td>

            </tr>
            <hr>
            <?php } ?>


        </tbody>
    </table>



</div>

<div class="container">
    <h2>Chi Tiết Đơn Hàng</h2>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Số Lượng </th>
                <th>Đơn Giá</th>
                <th>Thành Tiền</th>

            </tr>
        </thead>
        <tbody>
            <?php 
        $i=0;
        $total=0;

        foreach($order_details as $key=>$ord){
            $total+=$ord['product_quantity'] *$ord['price_product'];
            $i++;
            
        
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $ord['title_product'] ?></td>
                <td><img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $ord['image_product']?>" width="50"
                        height="50"></td>
                <td><?php echo $ord['product_quantity'] ?></td>
                <td><?php echo $ord['price_product'] ?></td>
                <td><?php echo $ord['product_quantity'] *$ord['price_product']?></td>
            </tr>

            <?php } ?>
            </tr>

            <form action="<?php echo BASE_URL?>/order/order_comfirm/<?php echo $ord['order_code']?>" method="post">
                <tr>
                    <td><input type="submit" name="update_order" value="xử lí" class="btn btn_default"></td>
                    <td colspan="6">tong tien:<?php echo $total ?> </td>
                </tr>
            </form>
        </tbody>
    </table>
</div>