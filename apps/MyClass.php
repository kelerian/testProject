<?php



class MyClass
{
    
    const obj = 100;
    public static $count=0;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        self::$count++;
    }

    static function getName(){
        echo 'hello';
    }

}