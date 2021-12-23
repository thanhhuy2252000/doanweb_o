<?php
include '../utils/MYSQLUtils.php';
class ProductDao
{
    public function getAllProduct()
    {

        $myDB = new MYSQLUtil();
        $query = "SELECT `product_id`, `product_name`, `product_price`, `product_img`, `list_id` FROM `product`";
        $data = $myDB->getAllData($query);
        $myDB->disconnectDB();
        return $data;
    }

    public static function insertProduct($product_id, $product_name, $product_price, $product_img,$list_id)
    {
        $myDB = new MYSQLUtil();
        $query = "INSERT INTO `product`( `product_id`, `product_name`, `product_price`, `product_img`, `list_id` ) VALUES (:product_id,:product_name,:product_price,:product_img,:list_id)";
        $param = array(":product_id" => $product_id, ":product_name" => $product_name, ":product_price" => $product_price, ":product_img" => $product_img, ":list_id" => $list_id);
        $myDB->insertData($query, $param);
        $myDB->disconnectDB();
    }

    public static function getProduct($id)
    {
        $myDB = new MYSQLUtil();
        $query = "SELECT `product_id`, `product_name`, `product_price`, `product_img`, `list_id` FROM `product`where product_id=:product_id";
        $param = array(":product_id" => $id);
        $data = $myDB->getData($query, $param);
        $myDB->disconnectDB();
        return $data[0];
    }
    public static function deleteProduct($id)
    {
        $myDB = new MYSQLUtil();
        $query = "DELETE FROM `product` WHERE product_id = :product_id";
        $param = array(":product_id" => $id);
        $myDB->updateData($query, $param);
        $myDB->disconnectDB();
    }
    public static function updateProduct($id,$product_id, $product_name, $product_price, $product_img,$list_id)
    {

        $myDB = new MYSQLUtil();
        $query = "UPDATE `product` SET product_id=:product_id,product_name=:product_name,product_price=:product_price,product_img=:product_img,list_id:list_id WHERE product_id=:id";
        $param = array(":id" => $id,":product_id" => $product_id, ":product_name" => $product_name, ":product_price" => $product_price, ":product_img" => $product_img, ":list_id" => $list_id);
        $myDB->updateData($query, $param);
        $myDB->disconnectDB();
    }
}
?>