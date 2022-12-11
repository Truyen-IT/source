<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">


                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-warning">Đăng Kí</h3>
                    </div>
                    <div class="card-body">
                        <form id="signupForm" class="form-horizontal"
                            action="<?php echo BASE_URL ?>product/insert_taikhoan" method="post" autocomplete="off">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="username">Tên</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Tên đăng nhập" />
                                </div>
                            </div>





                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="password">Pass</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Mật khẩu" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">

                                </div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary" class="btn btn-default">Đăng
                                        Kí</button>
                                    <a class="btn btn-danger"
                                        href="<?php echo BASE_URL ?>/product/list_taikhoan">Thoát</a>
                                    <div class=" col-sm-1 offset-sm-8">


                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- Cột nội dung -->
        </div> <!-- Dòng nội dung -->
    </div> <!-- Container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL?>/public/js/jquery.validate.js"></script>

    <script type="text/javascript">
    // $.validator.setDefaults({
    // 	submitHandler: function () { alert("submitted!");}
    // });
    $(document).ready(function() {
        $("#signupForm").validate({
            rules: {

                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },


            },
            messages: {

                username: {
                    required: "Bạn chưa nhập vào tên đăng nhập",
                    minlenght: "Tên đăng nhập phải có ít nhất 2 kí tự",
                },
                password: {
                    required: "Bạn chưa nhập mật khẩu",
                    minlenght: "Mật khẩu phải có ít nhất 5 kí tự",
                },



            },
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.siblings("lable"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-invalid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-invalid");
            }
        });
    });
    </script>
</body>

</html>