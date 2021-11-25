<?php


class Db
{
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

    public function insert($name, $email, $password)
    {
        $insert = "INSERT INTO `user`(`name`,`email`, `password`) 
                    VALUES ('$name','$email, $password'
                    )";
        $sql = mysqli_query($this->conn, $insert);
    }




}

$db = new Db();
$db->insert(
    $_POST['name'],
    $_POST['email'],
    $_POST['password']
);


