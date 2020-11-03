<?php

class Product
{
    public $db = null;

    public function __construct(Dbcontrol $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch data

    public function getData($table = "product")
    {
        $result = $this->db->con->query("SELECT*FROM {$table}");
        $resultArr = array();


        //fetch data singly
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArr[] = $item;
        }
        return $resultArr;
    }

    //get product in cart

        public function getItem($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArr = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArr[] = $item;
            }

            return $resultArr;
        }
    }
}
