<?php
    class Exam {
        public function __construct(){
            echo "Construct1";
        }
    }

    class Exam2 extends Exam {
         public function __construct()
        {
            parent::__construct();
            echo "Construct2";
        }
    }

    $exam2 = new Exam2();
