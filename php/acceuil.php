<?php
//require "./../Yaml/vendor/autoload.php";
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('./../Yaml/acceuil.yaml');

$experience = $data['Acceuil'];

echo '<h1>' .$data['Acceuil']['title'] . '</h1>';
echo '<p>' .$data['Acceuil']['name'] .'</p>';
echo '<img src="' .$data['Acceuil']['image'] .'">';

?>