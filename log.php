<?php

$user_ip = '197.210.227.247';

//$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

echo $country = $geo["geoplugin_countryName"];
echo $city = $geo["geoplugin_city"];
?>

