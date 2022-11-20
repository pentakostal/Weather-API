<?php
namespace App;
require_once 'vendor/autoload.php';

while (true) {
    echo "----------------" . PHP_EOL;
    echo "      MENU" . PHP_EOL;
    echo "----------------" . PHP_EOL;
    echo "1) Current forecast" . PHP_EOL;
    echo "2) 12-Hour forecast" . PHP_EOL;
    echo "3) Day forecast" . PHP_EOL;
    echo "4) Exit" . PHP_EOL;
    $menuChoice = (int)readline("-> ");

    switch ($menuChoice) {
        case 1:
            $city = new Current(readline("Enter city name: ->"));
            $data = $city->getCurrent();
            echo PHP_EOL;
            echo "Current weather in " . $city->getCityName() . " is " . $data[0] . PHP_EOL;
            echo "Temperature is " . $data[1] . PHP_EOL;
            echo "Wind speed is " . $data[2] . " m/s" . PHP_EOL;
            readline();
            break;
        case 2:
            $city = new Hourly(readline("Enter city name: ->"));
            $data = $city->getHourly();
            echo PHP_EOL;
            echo "12 hour forecast for: " . $city->getCityName() . PHP_EOL;
            echo "Weather is: " . $data[0] . PHP_EOL;
            echo "Min temperature is " . $data[1] . " Max temperature is: " . $data[2] . PHP_EOL;
            echo "Humidity is: " . $data[3] . PHP_EOL;
            echo "Pressure is: " . $data[4] . PHP_EOL;
            echo "Wind speed is: " . $data[5] . " m/s" . PHP_EOL;
            readline();
            break;
        case 3:
            $city = new Daily(readline("Enter city name: ->"));
            $data = $city->getDaily();
            echo PHP_EOL;
            echo "12 hour forecast for: " . $city->getCityName() . PHP_EOL;
            echo "Weather is: " . $data[0] . PHP_EOL;
            echo "Min temperature is " . $data[1] . " Max temperature is: " . $data[2] . PHP_EOL;
            echo "Humidity is: " . $data[3] . PHP_EOL;
            echo "Pressure is: " . $data[4] . PHP_EOL;
            echo "Wind speed is: " . $data[5] . " m/s" . PHP_EOL;
            readline();
            break;
        case 4:
            die;
        default:
            echo "WRONG CHOICE" . PHP_EOL;
    }
}
