

<div class="container col-sm-8">

<div class="col-md-12">
<form  action="<?php echo BASE_URL ?>/product/insert_category" method="POST">
<h1>Thêm Danh Mục Sản Phẩm</h1>
  <div class="form-group row">
    <label class="col-sm-3" for="email">Tên</label>
    <div class="col-sm-5">
    <input  type="text" name="title_category_product" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Miêu Tả</label>
    <div class="col-sm-5">
    <input type="text" name="desc_category_product" class="form-control">
  </div>
  </div>
 
  <button type="submit" class="btn btn-default">Thêm Danh Mục</button>
</form>
</div>



</div>