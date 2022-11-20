<?php
namespace App;

class Current
{
    private $cityName;

    public function __construct(string $cityName)
    {
        $this->cityName = $cityName;
    }

    public function getCurrent(): array
    {
        $apiKey = "a0d5241d2f9b01766802b3f6a012a7cd";
        $apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=' . $this->cityName . '&appid=' . $apiKey . '&units=metric';

        $weatherData = json_decode(file_get_contents($apiUrl), true);

        $data[] = $weatherData['weather'][0]['main'];
        $data[] = round($weatherData['main']['temp']);
        $data[] = round($weatherData['wind']['speed']);

        return $data;
    }

    public function getCityName(): string
    {
        return $this->cityName;
    }
}