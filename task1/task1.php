<?php

class Tasc1
{
    private $exo = "Hello";


    public function Exo()
    {
        return $this->exo;
    }
}

$task1 = new Tasc1();
echo $task1->Exo();