<?php

class ConversorTemperatura
{
    public function celsiusParaFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }

    public function fahrenheitParaCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }
}

$conversor = new ConversorTemperatura();
$celsius = 25;
$fahrenheit = 77;

echo $celsius . " °C = " . $conversor->celsiusParaFahrenheit($celsius) . " °F" . PHP_EOL;
echo $fahrenheit . " °F = " . number_format($conversor->fahrenheitParaCelsius($fahrenheit), 2, ',', '.') . " °C" . PHP_EOL;
