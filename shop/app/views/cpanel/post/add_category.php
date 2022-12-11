

<div class="container">

<div class="col-md-8">
<h1>Thêm Danh Mục bài Viết</h1>
<form action="<?php echo BASE_URL ?>/post/insert_category" method="POST">
  <div class="form-group row">
    <label class="col-sm-3" for="email">Tên</label>
    <div class="col-sm-5">
    <input type="text" name="title_category_post" class="form-control">
  </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3" for="pwd">DESC</label>
    <div class="col-sm-5">
    <input type="text" name="desc_category_post" class="form-control">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-3">
  </div>

    
  <div class="col-sm-5">
  <button type="submit" class="btn btn-default">Thêm Danh Mục</button>
  </div>
  </div>
</form>
</div>



</div>