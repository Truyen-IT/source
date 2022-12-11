

<div class="container col-sm-8">
 

<div class="col-md-12">
<h1>Cập Nhật Danh Mục Bài Viết</h1>

    <?php
    foreach($categorybyid as $key=>$cat){

    
    ?>
<form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $cat['id_category_post'] ?>" method="POST">
  <div class="form-group row">
    <label class="col-sm-3"for="email">Tên Danh Mục</label>
    <div class="col-sm-5">
    <input type="text" value="<?php echo $cat['title_category_post'] ?>" name="title_category_post" class="form-control">
  </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Miêu Tả</label>
    <div class="col-sm-5">
    
    <textarea name="desc_category_post" class="form-control" style="resize: none;" rows="5"><?php echo $cat['desc_category_post']?></textarea>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-3">
  </div>
  <div class="col-sm-5">
 
  <button type="submit" class="btn btn-default">Cập Nhật Danh Mục</button>
  </div>
  </div>

</form>
<?php }?>
</div>



</div>