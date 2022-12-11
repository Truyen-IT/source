<section>
         <div class="bg_in">
            <div class="content_page cart_page">
               <div class="breadcrumbs">
                  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo BASE_URL?>">
                        <span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item">
                        <strong itemprop="name">
                        Giỏ hàng
                        </strong>
                        </span>
                        <meta itemprop="position" content="2" />
                     </li>
                  </ol>
               </div>
               <div class="box-title">
                  <div class="title-bar">
                     <h1>Giỏ hàng của bạn</h1>
                  </div>
               </div>
               <?php if(!empty($_GET['msg'])){
                  $msg=unserialize(urldecode($_GET['msg']));
                  foreach($msg as $key => $value){
                     echo $value;

                  }
               }
               ?>
               <?php 
               if(isset($_SESSION['shopping_cart'])){
                  $cart=$_SESSION['shopping_cart'];



               }
                  ?>
               <div class="content_text">
                  <div class="container_table">
                     <table class="table table-hover table-condensed">
                        <thead>
                           <tr class="tr tr_first">
                              <th >Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                             
                              <th >Giá</th>
                              <th style="width:100px;">Số lượng</th>
                              <th>Thành tiền</th>
                              <th style="width:50px; text-align:center;"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                        if(isset($_SESSION["shopping_cart"])){
                           ?>
                           <form action="<?php echo BASE_URL ?>/giohang/updategiohang" method="post">
                              <?php
                          
                              $total=0;
                              foreach ($_SESSION["shopping_cart"] as $key =>$value){
                                 $subtotal=$value['product_quantity']*$value['product_price'];
                                 $total+=$subtotal;

                             
                           ?>
                           <tr class="tr">
                                 <td data-th="Hình ảnh">
                                    <div class="col_table_image col_table_hidden-xs"><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>" alt="<?php echo $value['product_title'] ?>" class="img-responsive"/></div>
                                 </td>
                                 <td data-th="Sản phẩm">
                                    <div class="col_table_name">
                                       <h4 class="nomargin"><?php echo $value['product_title'] ?></h4>
                                    </div>
                                 </td>
                                
                                 <td data-th="Giá"><span class="color_red font_money"><?php echo $value['product_price'] ?></span></td>
                                 <td data-th="Số lượng">
                                    <div class="clear margintop5">
                                       <div class="floatleft">
                                          <input type="number" min="1" class="inputsoluong" name="qty[<?php echo $value['product_id'] ?>]"  value="<?php echo $value['product_quantity'] ?>"></div>
                                    
                                       <div class="floatleft width50">
                                          <button class="btn_df btn_table_td_rf_del btn-sm">
                                          <i class="fa fa-refresh"></i></button>
                                       </div>
                                    </div>
                                    <div class="clear"></div>
                                 </td>
                                 <td data-th="Thành tiền" class="text_center"><span class="color_red font_money"> <?php echo $subtotal ?></span></td>
                                 <td class="actions aligncenter" data-th="">
                                    <button type="submit" value="<?php echo $value['product_id'] ?>" style="box-shadow:none;" name="delete_cart" class="btn btn-sm btn-warning"><i class="fa fa-trash-o"></i></button>
                                    <button type="submit" value="<?php echo $value['product_id'] ?>" style="box-shadow:none;" name="update_cart" class="btn btn-sm btn-primary">Cap Nhat</button>
                                   
                                    
                                  
                                  
                                 </td>
                              </tr>
                              <?php 
                              }
                              ?>
                           </form>
                           <tr>
                              <td colspan="7" class="textright_text">
                                 <div class="sum_price_all">
                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                    <span class="text_price color_red"><?php echo $total ?>$</span>
                                 </div>
                              </td>
                           </tr>
                           <?php
                        }?>
                        </tbody>
                        <tfoot>
                           <tr class="tr_last">
                              <td colspan="7">
                                 <a href="." class="btn_df btn_table floatleft"><i class="fa fa-long-arrow-left"></i> Tiếp tục mua hàng</a>
                                 <div class="clear"></div>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
                  <div class="contact_form">
                     <div class="contact_left">
                        <div class="ch-contacts-details">
                           
                           <ul class="contact-list">
                              

                              <li class="addr">
                  
                                 <strong class="title text-center">Chúng Tôi Cam Kết</strong>
                                 <img src="<?php echo BASE_URL?>/public/images/hinh.jpg">
                                 <strong class="title text-center">Địa chỉ của chúng tôi</strong>
                                 <p><em><strong>Shop.com</strong></em><br />
                                 <p class="">Trung Tâm Bán Hàng:</p>
                                 <p>CN1:Tân Phú,Thới Bình,Cà Mau</p>
                                 <p>CN2:2/3,Xuân Khánh,Ninh Kiều,Cần Thơ</p>
                                 <p> Hotline:0839607053(zalo)</p>
                                 </p>
                              </li>
                           </ul>
                           <div class="hiring-box">
                              <strong class="title text-center">Chào bạn!</strong>
                              <p>Mọi thắc mắc bạn hãy gửi về mail của chúng tôi <strong>truyenb1910323@student.ctu.edu.vn</strong> chúng tôi sẽ giải đáp cho bạn.</p>
                              <p><a href="." class="arrow-link"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Về trang chủ</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="contact_right">
                        <div class="form_contact_in">
                           <div class="box_contact">
                              
                           <form id="signupForm" name="FormDatHang" method="post" autocomplete="off" action="<?php echo BASE_URL ?>/giohang/dathang" >
                                 <div class="content-box_contact">
                                    <div class="row">
                                       <div class="input">
                                          <label for="name">Họ và tên: <span style="color:red;">*</span></label>
                                          <input id="name" type="text" name="name" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Số điện thoại: <span style="color:red;">*</span></label>
                                          <input type="text" name="sodienthoai" required onkeydown="return checkIt(event)" class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Địa chỉ: <span style="color:red;">*</span></label>
                                          <input type="text" name="diachi" required class="clsip" >
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Email: <span style="color:red;">*</span></label>
                                          <input type="text" name="email" onchange="return KiemTraEmail(this);" required class="clsip">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row">
                                       <div class="input">
                                          <label>Nội dung: <span style="color:red;">*</span></label>
                                          <textarea type="text" name="noidung" class="clsipa"></textarea>
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="row btnclass">
                                       <div class="input ipmaxn ">
                                          <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Gửi đơn hàng">
                                          <input type="reset" class="btn-gui" value="Nhập lại">
                                       </div>
                                       <div class="clear"></div>
                                    </div>
                                    <!---row---->
                                    <div class="clear"></div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="clear"></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL?>/public/js/jquery.validate.js"></script>

	<script type="text/javascript">
		$.validator.setDefaults({
			submitHandler: function () { alert("submitted!");}
		});
		$(document).ready(function () {
			$("#signupForm").validate({
				rules: {
					
					name: { required: true, minlength: 2},
					sodienthoai: { required: true, minlength: 10},
					diachi: { required: true, minlength: 5, equalTo: "#password"},
					email: { required: true, email: true},
					noidung: "required"
				},
				messages: {
					
					name: {
						required: "Bạn chưa nhập vào tên đăng nhập",
						minlenght: "Tên đăng nhập phải có ít nhất 2 kí tự",
					},
					sodienthoai: {
						required: "Bạn chưa nhập mật khẩu",
						minlenght: "Mật khẩu phải có ít nhất 5 kí tự",
					},
					diachi: {
						required: "Bạn chưa nhập mật khẩu",
						minlenght: "Mật khẩu phải có ít nhất 5 kí tự",
						
					},
					email: "Hộp thư điện tử không hợp lệ",
               noidung: "Bạn phải đồng ý với các quy định của chúng tôi"

				},
				errorElement: "div",
				errorPlacement: function (error, element){
					error.addClass("invalid-feedback");
					if (element.prop("type") === "checkbox"){
						error.insertAfter(element.siblings("lable"));
					}else{
						error.insertAfter(element);
					}
				},
				highlight: function (element, errorClass, validClass) {
					$(element).addClass("is-invalid").removeClass("is-invalid");
				},
				unhighlight: function (element, errorClass, validClass) {
					$(element).addClass("is-invalid").removeClass("is-invalid");
				}
			});
		});

	</script>