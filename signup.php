<?php

class Signup
{

    public $db = null;

    public function __construct(Dbcontrol $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }


    public function reg($paras = null, $table = "user")
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

    public  function in($first="anirbaan", $phn="9082343919", $password="abcd")
    {
        if (isset($first) && isset($password)) {
            $params = array(
                "name"=>$first,
                "phone"=>$phn,
                "password"=>$password
            );

            // insert data into cart
            $result = $this->reg($params);
            if ($result) {
                // Reload Page
                // header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }
}
