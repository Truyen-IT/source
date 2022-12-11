<div class="container card">
    <h1 class="text-center text-warning">Cập Nhật Tài Khoản</h1>
    <div class="col-md-8">
        <?php
    foreach($categorybyid as $key=>$cat){

    
    ?>
        <form action="<?php echo BASE_URL ?>/product/update_taikhoan/<?php echo $cat['admin_id'] ?>" method="POST">
            <div class="form-group row">
                <label  class="col-sm-4 col-form-label" for="email">Tên Tài Khoản </label>
                <div class="col-sm-5">
                    <input type="text" value="<?php echo $cat['username']?>" name="ten" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="pwd">Password</label>
                <div class="col-sm-5">
                <textarea name="desc" class="form-control" style="resize: none;"
                    rows="5"><?php echo $cat['password']?></textarea>
                    </div>
            </div>
            <div class="col-sm-5 offset-sm-4">


            </div>
            <div class="col-sm-5 offset-sm-4">

                <button type="submit" class="btn btn-default">Cập Nhật</button>
            </div>
    </div>
    </form>
    <?php }?>
</div>



</div>