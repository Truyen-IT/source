

<div class="container">

<div class="col-md-8">
<form action="<?php echo BASE_URL ?>/product/insert_product" method="POST" enctype="multipart/form-data"><!--gui hinh anh-->
<h1>Thêm Sản Phẩm</h1>  
<div class="form-group row">
  
    <label  class="col-sm-3" for="email">Tên</label>
    <div class="col-sm-5">
    <input type="text" name="title_product" class="form-control">
  </div>
</div>
  <div class="form-group row">
    <label  class="col-sm-3" for="pwd">Hình</label>
    <div class="col-sm-5">
    <input type="file" name="image_product" class="form-control">
  </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-3" for="pwd">Giá</label>
    <div class="col-sm-5">
    <input type="text" name="price_product" class="form-control">
  </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-3" for="pwd">Số Lượng</label>
    <div class="col-sm-5">
    <input type="text" name="quantity_product" class="form-control">
  </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-3" for="pwd">Miêu Tả</label>
    <div class="col-sm-5">
    <textarea name="desc_product" class="form-control" style="resize: none;" rows="3"></textarea>
  </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Danh Mục</label>
    <div class="col-sm-5">
    <select name="category_product" class="form-control">
       <?php foreach($category as $key=>$cate){

       ?>
       <option value="<?php echo $cate['id_category_product']?>"><?php echo $cate['title_category_product']?></option>
       <?php }?>
       
       </select>

    
    
  
  
  </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-3" for="pwd">Sản Phẩm Hot</label>
    <div class="col-sm-5">
    <select name="product_hot" class="form-control">
      
       <option class="text-primary" value="0>">Không có</option>
       <option value="1>">Có</option>
      
       
       </select>

    
    
  
  
  </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-3"></div>
  
    <div class="col-sm-5">
  <button type="submit" class="btn btn-default">Thêm Sản Phẩm</button>
  </div>
  </div>

</form>
</div>



</div>