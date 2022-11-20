<?php

namespace App;

class Hourly
{
    private string $cityName;

    public function __construct(string $cityName)
    {
        $this->cityName = $cityName;
    }

    public function getHourly(): array
    {
        $apiKey = "a0d5241d2f9b01766802b3f6a012a7cd";
        $apiUrl = 'https://api.openweathermap.org/data/2.5/forecast?q=' . $this->cityName . '&appid=' . $apiKey . '&units=metric';;

        $weatherData = json_decode(file_get_contents($apiUrl), true);
        $data[] = $weatherData['list'][3]['weather'][0]['main'];
        $data[] = round($weatherData['list'][3]['main']['temp_min']);
        $data[] = round($weatherData['list'][3]['main']['temp_max']);
        $data[] = $weatherData['list'][3]['main']['humidity'];
        $data[] = $weatherData['list'][3]['main']['pressure'];
        $data[] = round($weatherData['list'][3]['wind']['speed']);

        return $data;
    }

    public function getCityName(): string
    {
        return $this->cityName;
    }
}