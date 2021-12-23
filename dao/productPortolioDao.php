<?php
include '../utils/MYSQLUtils.php';
class ProductPortolioDao
{
    public function getAllProduct()
    {

        $myDB = new MYSQLUtil();
        $query = "SELECT `list_id`, `list_name` FROM `list`";
        $data = $myDB->getAllData($query);
        $myDB->disconnectDB();
        return $data;
    }

    public static function insertProduct($list_id, $list_name)
    {
        $myDB = new MYSQLUtil();
        $query = "INSERT INTO `list`(`list_id`, `list_name`) VALUES (:list_id,:list_name)";
        $param = array(":list_id" => $list_id, ":list_name" => $list_name);
        $myDB->insertData($query, $param);
        $myDB->disconnectDB();
    }

    public static function getProduct($id)
    {
        $myDB = new MYSQLUtil();
        $query = "SELECT `list_id`, `list_name` FROM `list`where list_id=:list_id";
        $param = array(":list_id" => $id);
        $data = $myDB->getData($query, $param);
        $myDB->disconnectDB();
        return $data[0];
    }
    public static function deleteProduct($id)
    {
        $myDB = new MYSQLUtil();
        $query = "DELETE FROM `list` WHERE list_id = :list_id";
        $param = array(":list_id" => $id);
        $myDB->updateData($query, $param);
        $myDB->disconnectDB();
    }
    public static function updateProduct($id,$list_id, $list_name)
    {

        $myDB = new MYSQLUtil();
        $query = "UPDATE `list` SET list_id=:list_id,list_name=:list_name WHERE list_id=:id";
        $param = array(":id" => $id,":list_id" => $list_id, ":list_name" => $list_name);
        $myDB->updateData($query, $param);
        $myDB->disconnectDB();
    }
}
?>