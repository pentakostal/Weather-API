<?php
namespace App;
require_once 'vendor/autoload.php';

echo "----------------" . PHP_EOL;
echo "      MENU" . PHP_EOL;
echo "----------------" . PHP_EOL;
echo "1) Current forecast" . PHP_EOL;
echo "2) Hourly forecast" . PHP_EOL;
echo "3) Daily forecast" . PHP_EOL;
echo "4) Exit" . PHP_EOL;

switch (readline("-> ")) {
    case 1:
        $city = new Current(readline("Enter city name: ->"));
        $data = $city->getCurrent();

        echo "Current weather in " . $data[0] . " is " . $data[1] . ". Temperature is " . $data[2] . ". Wind speed is " . $data[3] . PHP_EOL;
        break;
    case 2:
        break;
    case 3:
        break;
    case 4:
        break;
    default:
        echo "WRONG CHOICE" . PHP_EOL;
}
