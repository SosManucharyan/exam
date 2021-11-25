<?php
class Db {
    protected $pdo;
    public function __construct() {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8, time_zone = '+04:00'"
        ];
        try {
            $this->pdo = new PDO(
                "mysql:host=localhost;dbname=exam",
                "root",
                "",
                $options
            );
        } catch(PDOException $error) {
            echo "Connection failed! " . $error->getMessage();
        }
    }

    public function insert($name, $price, $description, $quanity){
        $sql = "INSERT INTO `exams` VALUES (null, ?,?,?,?)";
        $insert = $this->pdo->prepare($sql);
        $insert->execute([$name, $price, $description, $quanity]);
        $last_inserted_id = $this->pdo->lastInsertId();
        echo $last_inserted_id;
    }
}

$db = new Db();
$db->insert('Tandz' , 3, 'llll', 4);


