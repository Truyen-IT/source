

<div class="container col-sm-8">

<div class="col-md-12">
<h1>Cập Nhật Bài Viết</h1>
<?php
    foreach($postbyid as $key=>$pos)
    {

    
    ?>
<form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $pos['id_post']?>" method="POST" enctype="multipart/form-data"><!--gui hinh anh-->
  <div class="form-group">
    <label for="email">Tên Bài Viết</label>
    <input type="text"value="<?php echo $pos['title_post'] ?>" name="title_post" class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Hình Ảnh</label>
    <input type="file" name="image_post" class="form-control">
    <p><img src="<?php echo BASE_URL?>public/uploads/post/<?php echo $pos['image_post']?>" width="50" height="50"></p>
  </div>
  <div class="form-group">
    <label for="pwd">Chi Tiết Bài Viết</label>
    <textarea name="content_post" class="form-control" style="resize: none;" rows="3"><?php echo $pos['content_post']?></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Danh Mục Bài Viết</label>
    <select name="category_post" class="form-control">
       
       <?php foreach($category as $key=>$cate){//cho minh chuyen data ben kia na

       ?>
       <option <?php if($cate['id_category_post']==$pos['id_category_post']){echo 'selected'; } ?> value="<?php echo $cate['id_category_post']?>"><?php echo $cate['title_category_post']?></option>
       <?php }?>
       
       </select>

    
    
  
  
  </div>
  
 
  <button type="submit" name="updatepost" class="btn btn-default">Cập Nhật Bài Viết</button>
</form>
<?php
}?>
</div>



</div>