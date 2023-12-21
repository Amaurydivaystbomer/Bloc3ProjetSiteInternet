<?php
require "./../Yaml/vendor/autoload.php";
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('./../Yaml/experiences.yaml');

$experience = $data['Experiences'];

echo '<h1>' .$data['Experiences']['title'] . '</h1>';