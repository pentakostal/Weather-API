<?php

namespace App;

class Daily
{
    private string $cityName;

    public function __construct(string $cityName)
    {
        $this->cityName = $cityName;
    }

    public function getDaily(): array
    {
        $apiKey = $_ENV['API_KEY'];
        $apiUrl = 'https://api.openweathermap.org/data/2.5/forecast?q=' . $this->cityName . '&appid=' . $apiKey . '&units=metric';

        $weatherData = json_decode(file_get_contents($apiUrl), true);
        $weatherData24 = [];

        for ($i = 0; $i < 8; $i++) {
            $weatherData24[] = $weatherData['list'][$i];
        }

        foreach ($weatherData24 as &$value) {
            $sumWeather[] = (string) $value['weather'][0]['main'];
        }
        $data[] = key(array_count_values(explode(' ', implode(' ', $sumWeather))));

        foreach ($weatherData24 as &$value) {
            $sumMin[] = (float) $value['main']['temp_min'];
        }
        $data[] = round((array_sum($sumMin) / 8));

        foreach ($weatherData24 as &$value) {
            $sumMax[] = (float) $value['main']['temp_max'];
        }
        $data[] = round((array_sum($sumMax) / 8));

        foreach ($weatherData24 as &$value) {
            $sumHumidity[] = (float) $value['main']['humidity'];
        }
        $data[] = round((array_sum($sumHumidity) / 8));

        foreach ($weatherData24 as &$value) {
            $sumPressure[] = (float) $value['main']['pressure'];
        }
        $data[] = round((array_sum($sumPressure) / 8));

        foreach ($weatherData24 as &$value) {
            $sumSpeed[] = (float) $value['wind']['speed'];
        }
        $data[] = (int) round((array_sum($sumSpeed) / 8));

        return $data;
    }

    public function getCityName(): string
    {
        return $this->cityName;
    }
}