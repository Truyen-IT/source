<section>
         <div class="bg_in">
            <div class="contact_form">
               <div class="contact_left">
                  <div class="ch-contacts-details">
                     <ul class="contact-list">
                        <li class="addr">
                           <strong class="title">Địa chỉ của chúng tôi</strong>
                           <p>
                              <em><strong>3t phone</strong></em><br />
                              <em> 333B Minh Phụng, Phường 2, Quận 11, HCM<br />
                              Điện thoại : 0839607053<br />
                              <!--   <strong>Điện thoại: <span style="color:#FF0000"></span></strong></em> -->
                           </p>
                        </li>
                     </ul>
                     
                  </div>
               </div>
               <div class="contact_right">
                  <div class="form_contact_in">
                     <div class="box_contact">
                        <form name="FormDatHang" method="post" action="gio-hang/" >
                           <div class="content-box_contact">
                              <div class="row">
                                 <div class="input">
                                    <label>Họ và tên: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtHoTen" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Số điện thoại: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtDienThoai" required onkeydown="return checkIt(event)" class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Địa chỉ: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtDiaChi" required class="clsip" >
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Email: <span style="color:red;">*</span></label>
                                    <input type="text" name="txtEmail" onchange="return KiemTraEmail(this);" required class="clsip">
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <!---row---->
                              <div class="row">
                                 <div class="input">
                                    <label>Nội dung: <span style="color:red;">*</span></label>
                                    <textarea type="text" name="txtNoiDung" class="clsipa"></textarea>
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
      </section>