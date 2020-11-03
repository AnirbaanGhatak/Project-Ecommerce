<?php



class Dbcontrol
{
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "table1";


    //connection

    public $con = null;


    //constructor

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if ($this->con->connect_error) {
            echo "Failed to connect" . $this->con->connect_error;
        }
    }

    public function __destructor()
    {
        $this->closeConn();
    }

    //closing
    protected function closeConn()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}

//object
