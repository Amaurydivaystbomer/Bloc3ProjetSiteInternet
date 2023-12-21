<?php
require "./../Yaml/vendor/autoload.php";
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('./../Yaml/apropos.yaml');

$experience = $data['Apropos'];

echo '<h1>' .$data['Apropos']['title'] . '</h1>';
echo '<p>' .$data['Apropos']['name'] .'</p>';

?>