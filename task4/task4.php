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
        public function insert($name, $quantity){
            $insert = "INSERT INTO `exams`(`name`,`quanity`) 
                    VALUES ('$name','$quantity'
                    )";
            $sql = mysqli_query($this->conn, $insert);
//            return mysqli_fetch_all($sql, MYSQLI_ASSOC);
        }
        public function select(){
            $select = "SELECT * FROM `exams`";
            $sql = mysqli_query($this->conn, $select);
            return mysqli_fetch_all($sql, MYSQLI_ASSOC);
        }

        public function update(){
            $update = "UPDATE `exams` SET `name`='Xndzor', `quanity`='2' WHERE 1";
            $sql = mysqli_query($this->conn, $update);
        }

        public function delete(){
            $delete = "DELETE FROM `exams` WHERE 1";
            $sql = mysqli_query($this->conn, $delete);
        }
    }

    $db = new Db();
    $db->insert('Apple', '4');
    $db->select();
    $db->update();
    $db->delete();
