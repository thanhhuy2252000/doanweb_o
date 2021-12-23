<?php
include '../dao/ProductDao.php';
include_once 'BaseController.php';
session_start();

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
    ProductDao::deleteProduct($id);
   alertM("Delete product Thành Công", "../view/product-list.php");
}
else if(isset($_POST['save'])){
  $txt_id=$_POST["txt_id"];
  $txt_name = $_POST["txt_name"];
  $txt_price = $_POST["txt_price"];
  $txt_list_id = $_POST["txt_list_id"];
  $txt_avtar=$_FILES['fileToUpload']['name'];
  ProductDao::insertProduct($txt_id, $txt_name, $txt_price, $txt_avtar,$txt_list_id);
  alertM("Insert product Thành Công", "../view/product-list.php");
}
else if(isset($_GET['update'])){
  $id=$_GET['update'];
  
  ProductDao::updateProduct($id,$txt_id, $txt_name, $txt_price, $txt_avtar,$txt_list_id);
  alertM("Update product Thành Công", "../view/product-list.php");
}


?>
