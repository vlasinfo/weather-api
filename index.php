<?php
/**
 * Created by PhpStorm.
 * User: y.vlasenko
 * Date: 26.04.2016
 * Time: 14:08
 */

$string = file_get_contents("http://api.wunderground.com/api/fbea22eb7a688b0d/conditions/forecast/lang:RU/q/Ukraine/Kiev.json");
$json_decoded = json_decode($string, true);

//print_r($json_decoded);


$location_country = $json_decoded['current_observation']['display_location']['state_name'];
$location_city = $json_decoded['current_observation']['display_location']['city'];


$location_country_ua = str_replace($location_country, "Украина", $location_country);

echo "Адресс: ".$location_country_ua."<br>";
echo "Город: ".$location_city;
?>