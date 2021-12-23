<?php
class productModel
{
    private $list_id;
    private $list_name;

    
    public function __construct($list_id, $list_name)
    {
        $this->list_id = $list_id;
        $this->list_name = $list_name;

    }
    public function get_list_id()
    {
        return $this->list_id;
    }
    public function get_list_name()
    {
        return $this->list_name;
    }
    
    public function setId($list_id): void {  
            $this->list_id = $list_id; 
        }
    public function setName($list_name): void {  
            $this->list_name = $list_name; 
        }
}
