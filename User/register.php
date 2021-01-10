<?php
require_once ("../includes/connection.php");

//Them du lieu
if(isset($_POST['tentk']))
{
    $tentk = $_POST['tentk'];
    $matkhau = $_POST['matkhau'];
    $cap = $_POST['cap'];
    $email = $_POST['email'];
    $insert = "INSERT INTO taikhoan(tentk,matkhau,cap,email) VALUES ('$tentk','$matkhau','$cap','$email') ";
    $ins = mysqli_query($conn,$insert);
}
?>