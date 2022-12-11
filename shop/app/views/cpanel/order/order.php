
<div class="container col-sm-8">
<h1 class=text-center>Liệt Kê Tất Cả Đơn Hàng</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Mã</th>
        <th>Ngày Đặt</th>
        <th>Tình Trạng</th>
        <th>Quản Lí</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;

        foreach($order as $key=>$ord){
            $i++;
            
        
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['order_code'] ?></td>
        <td><?php echo $ord['order_date'] ?></td>
        <td><?php if($ord['order_status']==0){ echo 'don hang moi';}else{echo 'da xu li';} ?></td>

        <td><a href="<?php echo BASE_URL?>/order/order_details/<?php echo $ord['order_code'] ?>">Xem</a>
          
      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div>