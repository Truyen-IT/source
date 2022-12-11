

<div class="container col-sm-8">

<div class="col-md-12">
<h1 style="text-align: center;">Cập Nhật Sản Phẩm</h1>

  <?php 
  foreach($productbyid as $key =>$pro){
    ?>
<form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product']?>" method="POST" enctype="multipart/form-data"><!--gui hinh anh-->
  <div class="form-group">
    <label for="email">Tên</label>
    <input type="text" name="title_product" class="form-control" value="<?php echo $pro['title_product']?>">
  </div>
  <div class="form-group">
    <label for="pwd">Hình ảnh</label>
    <input type="file" name="image_product" class="form-control" >
    <p><img src="<?php echo BASE_URL?>public/uploads/product/<?php echo $pro['image_product']?>" width="50" height="50"></p>
  </div>
  <div class="form-group">
    <label for="pwd">Giá</label>
    <input type="text" name="price_product" class="form-control" value="<?php echo $pro['price_product']?>">
  </div>
  <div class="form-group">
    <label for="pwd">Số Lượng</label>
    <input type="text" name="quantity_product" class="form-control" value="<?php echo $pro['quantity_product']?>">
  </div>
  <div class="form-group">
    <label for="pwd">Miêu Tả</label>
    <textarea name="desc_product" class="form-control" style="resize: none;" rows="3" ><?php echo $pro['desc_product']?></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Danh Mục</label>
    <select name="category_product" class="form-control">
       <?php foreach($category as $key=>$cate){

       ?>
       <option <?php if($cate['id_category_product']==$pro['id_category_product']){echo 'selected'; } ?> value="<?php echo $cate['id_category_product']?>"><?php echo $cate['title_category_product']?></option>
       
       <?php }?>
       
       </select>

    
    
  
  
  </div>
  <div class="form-group">
    <label for="pwd">Sản Phẩm Hot</label>
    <select name="product_hot" class="form-control">
      <?php
      if($pro['product_hot']==0){
      ?>
       <option selected value="0>">Không Có</option>
         <option value="1>">Có</option>

       <?php }else{
        
        ?>
         <option  value="0>">Không Có</option>
         <option selected value="1>">Có</option>

       <?php }?>
      
      
       
       </select>

    
    
  
  
  </div>
  
 
  <button type="submit" class="btn btn-default">Cập Nhật Sản Phẩm</button>
</form>
<?php }?>
</div>



</div>