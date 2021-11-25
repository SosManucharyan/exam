<?php
class Db {
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'exam';
    protected $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect(
            self::DB_HOST,
            self::DB_USER,
            self::DB_PASSWORD,
            self::DB_NAME
        );
    }
    public function insert($name, $price, $description, $quantity){
        $insert = "INSERT INTO `exams`(`name`, `price`, `description`,`quanity`) 
                    VALUES ('$name', '$price', '$description', '$quantity'
                    )";
        $sql = mysqli_query($this->conn, $insert);
//            return mysqli_fetch_all($sql, MYSQLI_ASSOC);
    }
    public function select(){
        $select = "SELECT * FROM `exams` WHERE `Name` LIKE  'A%'";
        $sql = mysqli_query($this->conn, $select);
        return mysqli_fetch_all($sql, MYSQLI_ASSOC);
    }

    public function select2(){
        $sql = "SELECT * FROM `exams` WHERE `quanity` < 1";
        $result = $this->conn->query($sql);
         return $result->fetch_all(MYSQLI_ASSOC);
        }



}

$db = new Db();
//$db->insert('Apple', '7', 'qaxcr', '4');
//$db->insert('Pear', '3', 'qaxcr', '0');
//$db->insert('grapes', '1', 'qaxcr', '1');


echo '<pre>';
print_r($db->select());
echo  '</pre>';

echo '<pre>';
print_r($db->select2());
echo  '</pre>';


