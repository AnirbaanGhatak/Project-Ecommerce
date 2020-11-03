<?php

class Cart
{
    public $db = null;

    public function __construct(Dbcontrol $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    //add to cart

    public function insert($paras = null, $table = "cart")
    {
        if ($this->db->con != null) {
            if ($paras != null) {
                //insert into cart(user_id) values(0)
                //get table columns

                $columns = implode(',', array_keys($paras));

                $values = implode(',', array_values($paras));


                $query_str = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                $result = $this->db->con->query($query_str);
                return $result;
            }
        }
    }
    //to get user id

    public  function addToCart($userid, $itemid)
    {
        if (isset($userid) && isset($itemid)) {
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insert($params);
            if ($result) {
                // Reload Page
                // header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function subTotal($arr)
    {
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
            // return sprintf('1080');
        }
    }

    public function deleteItem($item_id = null, $table = 'cart')
    {
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    public function getCid($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }
}
