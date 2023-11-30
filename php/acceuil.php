<?php
require "./Yaml/vendor/autoload.php"
use Symfony\component\Yaml\Yaml;

$data = Yaml::parseFile('./../Yaml/acceuil.yaml');

$experience = $data[acceuil];

echo '<h1>' .$data['Acceuil','title'] . '</h1>';


?>