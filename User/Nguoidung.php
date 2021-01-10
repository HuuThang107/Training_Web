<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Quản trị</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style1.css" rel="stylesheet">
        <link href="../css/style2.css" rel="stylesheet">
        <link href="../css/style3.css" rel="stylesheet">
        <link href="../css/style4.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="margin-left: 220px">
                <div class="col-md-12">
                    <center><h3 style="margin-top: 70px">Quản Lý Quản trị viên</h3></center>
                    <form method="POST" id="insert_nganhhoc" style="width: 500px; margin-left: 200px">

                        <label style="margin-top: 20px">Tên tài khoản</label>
                        <input type="text" class="form-control" id="tentk1" placeholder="Tên tài khoản" style="margin-left: 120px">
                        <br>
                        <label>Mật khẩu</label>
                        <input type="text" class="form-control" id="matkhau1" placeholder="Mật khẩu" style="margin-left: 120px">
                        <br>
                        <label>Quyền</label>
                        <input type="text" class="form-control" id="cap1" placeholder="" style="margin-left: 120px">
                        <br>
                        <label>Email</label>
                        <input type="text" class="form-control" id="email1" placeholder="Điền email" style="margin-left: 120px">
                        <br>
                        <center style="margin-left: 120px"><input type="button" name="insert_data" id="button_them" value="Thêm" class="btn btn-success"></center>
                    </form>
                    <br>
                    <div class="table-responsive" id="tk_table">
                    </div>
                </div>
            </div>
    </body>
</html>