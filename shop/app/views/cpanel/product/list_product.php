<div class="container ">
  <div class="col-md-8">
<h1>Liệt Kê Sản Phẩm</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Tên</th>
        <th>HÌnh</th>
        <th>DM</th>

        <th>Giá</th>
        <th>SL</th>
        <th>SP hot</th>
       
        <th>Quản Lí</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;

        foreach($product as $key=>$pro){//ben kia truyen qua product
            $i++;
            
       
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pro['title_product'] ?></td>
        <img src="" alt="">
        <td><img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['image_product']?>" width="50" height="50">
        </td>
        <td><?php echo $pro['title_category_product'] ?></td>
        <td><?php echo $pro['price_product'] ?>$</td>
        <td><?php echo $pro['quantity_product'] ?></td>
        <td><?php
         if ($pro['product_hot']==0){
          echo'khong co';

         }else{
          echo'co';;
         } ?></td>
        <td><a href="<?php echo BASE_URL?>/product/delete_product/<?php echo $pro['id_product'] ?>"><i
                            class="fa-solid fa-trash-can"></i></a>
            <a href="<?php echo BASE_URL?>/product/edit_product/<?php echo $pro['id_product'] ?>"><i
                            class="fa-regular fa-pen-to-square"></i></a></td>
      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div>
</div>

                
         
        
