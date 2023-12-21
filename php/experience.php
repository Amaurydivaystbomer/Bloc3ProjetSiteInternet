<?php
require "./../Yaml/vendor/autoload.php";
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('./../Yaml/experiences.yaml');

$experience = $data['Experiences'];

echo '<h1>' .$data['Experiences']['title'] . '</h1>';
echo '<ul>' .$data['Experiences']['titre2'] . '</ul>';
echo '<li>' .$data['Experiences']['Liste1'] . '</li>';