<?php
class productModel
{
    private $product_id;
    private $product_name;
    private $product_price;
    private $product_img;
    private $list_id;
    
    public function __construct($product_id, $product_name, $product_price, $product_img,$list_id)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_img = $product_img;
        $this->list_id = $list_id;
    }
    public function get_product_id()
    {
        return $this->product_id;
    }
    public function get_product_name()
    {
        return $this->product_name;
    }
    public function get_product_price()
    {
        return $this->product_price;
    }
    public function get_product_img()
    {
        return $this->product_img;
    }
     public function get_list_id()
    {
        return $this->list_id;
    }
     public function setId($product_id): void {  
            $this->product_id = $product_id; 
        }
    public function setName($product_name): void {  
            $this->product_name = $product_name; 
        }

    public function setPrice($product_price): void {  
            $this->product_price = $product_price; 
        }

    public function setImg($product_img): void{  
            $this->product_img = $product_img; 
        }

    public function setType_id($type_id): void {  
            $this->type_id = $type_id; 
        }
}
