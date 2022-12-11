<div class="container col-sm-8">
<h1 style="text-align: center;">Liệt Kê Bài Viết</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Tên</th>
        <th>Hình</th>
        <th>Danh Mục</th>
       
        <th>Quản Lí</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $i=0;

        foreach($post as $key=>$pos){//ben kia truyen qua post
            $i++;
            
        //<?php echo $pro['image_product']?
        ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $pos['title_post'] ?></td>
        <td><img src="<?php echo BASE_URL?>public/uploads/post/<?php echo $pos['image_post']?>" width="50" height="50">
        </td>
        <td><?php echo $pos['title_category_post'] ?></td>
        <td><a href="<?php echo BASE_URL?>/post/delete_post/<?php echo $pos['id_post'] ?>"><i
                            class="fa-solid fa-trash-can"></i></a>
            <a href="<?php echo BASE_URL?>/post/edit_post/<?php echo $pos['id_post'] ?>"><i
                            class="fa-regular fa-pen-to-square"></i></a></td>
      </tr>
      <?php } ?>
     
    </tbody>
  </table>
</div>