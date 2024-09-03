<?php
require_once("Config.php");
class connect
{
    public $conn;
    public $num_rows; //khai báo biến toàn cục
    function __construct() //kết nối CSDL theo hướng đối tượng
    {
        $this -> conn = new mysqli(server, username, password, dbname); //dùng các biến đã định nghĩa ở Config.php kết nối CSDL
        $this -> conn -> set_charset("utf8");
    }
    function getConn()
    {
        return $this->conn;
    }
}
?>