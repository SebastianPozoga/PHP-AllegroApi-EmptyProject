<?php

require_once "vendor/autoload.php";

use AllegroApi\AllegroApi;
use AllegroApi\AllegroConfig;

$configData = parse_ini_file('config/config.ini');
$allegroConfig = new AllegroConfig($configData);

$api = new AllegroApi($allegroConfig);
$countries = $api->getCountries();

//list countries
foreach ($countries->countryArray->item as $item) {
	echo $item->countryId . ' : ' . $item->countryName . "\n";
}


