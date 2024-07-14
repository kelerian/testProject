<?php



require_once ('./models/Apple.php');
// require_once ('Apple.php');
require_once ('./models/Xiaomi.php');

require_once ('./models/HTML.php');

include_once ('./models/HTML.php');


use models\Apple;

$evro = '12';
$name = 'Kolya';
class Test{
    public static function hello(){
        echo 'hello not namespace';
    }
}

echo "Peremennaya ravna $evro, I am $name! ";

$test = new Apple();

Test::hello();

// $test2 = new Xiaomi();

