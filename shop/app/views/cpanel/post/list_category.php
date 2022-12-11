<div class="container col-sm-5">
<h1>Liệt Kê Danh Mục Bài Viết</h1>
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
        <td><?php echo $cate['title_category_post'] ?></td>
        <td><?php echo $cate['desc_category_post'] ?></td>
        <td><a href="<?php echo BASE_URL?>/post/delete_category/<?php echo $cate['id_category_post'] ?>"><i
                            class="fa-solid fa-trash-can"></i></a>
            <a href="<?php echo BASE_URL?>/post/edit_category/<?php echo $cate['id_category_post'] ?>"><i
                            class="fa-regular fa-pen-to-square"></i></a></td>
      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div>