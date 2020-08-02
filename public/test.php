<?php

//Prueba 1 de PDO

class Test{

    private int $math1;
    private int $math2;

    public function __construct($var1,$var2){

        $this->math1 = $var1;
        $this->math2 = $var2;

        // echo $this->math1;

        //echo "Hello World";
    }

    public function suma(){

        return $this->math1 + $this->math2;

    }

    public function multiplicacion(){

        return $this->math1 * $this->math2;

    }
}

$test = new Test(23,37);

$test2 = $test->suma();

echo $test2 . "<br>";
$test3 = $test->multiplicacion();

echo $test3;
