<?php
session_start();
include '../dao/UserDao.php';
include_once './BaseController.php';

function alertM($smg, $link)
{
    echo '<script language="javascript">';
    echo 'alert("'.$smg.'")';
    echo '</script>';
    echo '<script type="text/javascript">
            window.location = "'.$link.'" </script>';
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    UserDao::deleteUser($id);
    alertM("Delete user Thành Công", "../view/users.php");

}
else if(isset($_POST['save'])){
    $txt_id=$_POST["txt_id"];
    $txt_name = $_POST["txt_name"];
    $txt_pass = $_POST["txt_pass"];
    $txt_phone=$_POST["txt_phone"];
    $txt_address = $_POST["txt_adress"];
    UserDao::insertUser($txt_id, $txt_name, $txt_pass, $txt_phone,$txt_address);
    alertM("Thêm user Thành Công", "../view/users.php");
}
else if(isset($_GET['update'])){
  $id=$_GET['update'];
  
  UserDao::updateUser($id,$user_id, $user_name, $user_pass,$user_phone, $user_address);
  alertM("Update user Thành Công", "../view/users.php");
}


?>
