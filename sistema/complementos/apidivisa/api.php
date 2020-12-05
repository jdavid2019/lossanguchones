<?php
//https://cambio.today/api
$url="https://api.cambio.today/v1/full/USD/json?key=6274|qAWtW4eR7Oc_PLtuNBNP5uT*T~vXt9F^";
$json = file_get_contents($url);
$datos = json_decode($json,true);
$conv = $datos["result"];
//valor de 1 dolar en peru equivale a 3. soles 
$conv7 = $conv["conversion"][104]["rate"];


?>