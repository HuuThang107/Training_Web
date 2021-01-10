<?php ob_start() ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sigin V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../img/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->

</head>
<body>
<a href="Dangnhap.php">Đăng nhập</a>
<div class="limiter">
    <div class="container-login100" style="background-image: url('../img/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="Dangky.php">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

                <span class="login100-form-title p-b-34 p-t-27">
            Register
          </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="tentk" id="tentk" placeholder="Tên tài khoản">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="matkhau" id="matkhau" placeholder="Mật khẩu">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter level">
                    <input class="input100" type="text" name="cap" id="cap" placeholder="Cấp">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter email">
                    <input class="input100" type="text" name="email" id="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="container-login100-form-btn" style="margin-top: 70px">
                    <input class="login100-form-btn" type="button" name="insert_data" id="button_them" value="Register" style="margin-left: 25px">
                </div>
            </form>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/bootstrap/js/popper.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../vendor/daterangepicker/moment.min.js"></script>
<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../js/main.js"></script>

</body>

</html>
<script type="text/javascript">
                $(document).ready(function () {
                    //Them du lieu
                    $('#button_them').on('click',function () {
                        var tentk = $('#tentk').val();
                        var matkhau = $('#matkhau').val();
                        var cap = $('#cap').val();
                        var email = $('#email').val();
                        if(tentk == '' || matkhau == '' || cap == '' || email == '')
                        {
                            alert('Vui lòng nhập đầy đủ dữ liệu');
                        }
                        else if(cap > 1 || cap <1)
                        {
                            alert('Đăng ký người dùng cấp mặc định là "1" !')
                        }
                        else if (tentk == '!' || matkhau =='!' || tentk == '`' || matkhau =='`' || tentk == '~' || matkhau =='~' || tentk == '@' || matkhau =='@' || tentk == '$' || matkhau =='$' || tentk == '%' || matkhau =='%' || tentk == '^' || matkhau =='^' || tentk == '&' || matkhau == '&' || tentk == '*'|| matkhau == '*') {
                                alert('Không được nhập ký tự đặc biệt !')
                        }
                        else {
                            $.ajax({
                                url:"../Admin/quantri-taikhoan.php",
                                method: "POST",
                                data:{tentk:tentk,matkhau:matkhau,cap:cap,email:email},
                                success:function(data) {
                                    alert("Đăng ký thành công!");
                                    $('#insert_tk')[0].reset();
                                    load_du_lieu();
                                }
                            });
                        }
                    });
                    load_du_lieu();
                });
            </script>
