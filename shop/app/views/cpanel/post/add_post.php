

<div class="container">

<div class="col-md-8">
<h1>Thêm Bài Viết</h1>
<form action="<?php echo BASE_URL ?>/post/insert_post" method="POST" enctype="multipart/form-data"><!--gui hinh anh-->
  <div class="form-group row">
    <label class="col-sm-3" for="email">Tên </label>
    <div class="col-sm-5">
    <input type="text" name="title_post" class="form-control">
  </div>
</div>

  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Hình</label>
    <div class="col-sm-5">
    <input type="file" name="image_post" class="form-control">
  </div>
</div>

  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Chi Tiết</label>
    <div class="col-sm-5">
    <textarea name="content_post" class="form-control" style="resize: none;" rows="3"></textarea>
  </div>
</div>

  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Danh Mục</label>
    <div class="col-sm-5">
    <select name="category_post" class="form-control">
       <?php foreach($category as $key=>$cate){//cho minh chuyen data ben kia na

       ?>
       <option value="<?php echo $cate['id_category_post']?>"><?php echo $cate['title_category_post']?></option>
       <?php }?>
       
       </select>
</div>


    
    
  
  
  </div>

   <div class="form-group row">
  <div class="col-sm-3">
  </div>


  <div class="col-sm-5">
  <button type="submit" class="btn btn-default">Thêm Bài Viết</button>
  </div>
  </div>
</form>
</div>
</div>




