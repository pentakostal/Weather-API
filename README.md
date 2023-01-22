# Weather forecast API

Location weather forecast. Display weather now, 12 hour and for today. 
Search your location by city name ore use hot tags.

### Features:
<ol>
    <li>Weather forecast now, next 12 hour, today.</li>
    <li>Search city</li>
</ol>

![](https://github.com/pentakostal/Weather-API/blob/main/public/images/Peek%202023-01-22%2023-56.gif)
![](https://github.com/pentakostal/Weather-API/blob/main/public/images/Peek%202023-01-22%2023-57.gif)

### Components used:
<ol>
<li>PHP 7.4</li>
<li>Other packages located in composer.lock file</li>
</ol>

### How to install
<ol>
<li>Clone repository to your local machine (more convenient way for you)</li>
<li>For these project you will need an API key from (register for free, and you will
get your API key): </li>

[OpenWeatherMap](https://openweathermap.org/api)

<li>After in console navigate to root folder, where you cloned project.</li>
<li>Then run command:</li>

> composer install

<li>Create a .env file
    <ol>
        <li>Take .env.example file and rename it in .env.</li>
        <li>Enter your api key.</li>
        <li>Where is "CUSTOM" parameter enter yours.</li>
    </ol>
</li>
<li>Im root directory run command:</li>

>php -S localhost:8000

<li>After you can open project in your favorite browser under localhost:8000</li>
</ol>

