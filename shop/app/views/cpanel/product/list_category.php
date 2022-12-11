<div class="container">
  <div class="col-md-8">
<h1>Liệt Kê Danh Mục Sản Phẩm</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Tên</th>
        <th>Mô Tả</th>
        <th>Quản Lí</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;

        foreach($category as $key=>$cate){
            $i++;
            
        
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cate['title_category_product'] ?></td>
        <td><?php echo $cate['desc_category_product'] ?></td>
        <td><a href="<?php echo BASE_URL?>/product/delete_category/<?php echo $cate['id_category_product'] ?>"><i
                            class="fa-solid fa-trash-can"></i></a>
            <a href="<?php echo BASE_URL?>/product/edit_category/<?php echo $cate['id_category_product'] ?>"><i
                            class="fa-regular fa-pen-to-square"></i></a></td>
      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div></div>