<?php
require "./../Yaml/vendor/autoload.php";
use Symfony\Component\Yaml\Yaml;

$data = Yaml::parseFile('./../Yaml/competences.yaml');

$experience = $data['Content'];

echo '<h1>' .$data['Content']['title'] . '</h1>';
echo '<h2>' .$data['Content']['titredev'] . '</h2>';
echo '<h5>' . $data['Content']['HTML'] . '</h5><img src="' . $data['Content']['imageetoile'] . '" class="etoile">';
echo '<h5>' .$data['Content']['CSS'] . '</h5><img src="' .$data['Content']['imageetoile'] .'"class="etoile">';
echo '<h5>' .$data['Content']['JS'] . '</h5>';
echo '<h5>' .$data['Content']['PHP'] . '</h5>';
echo '<h5>' .$data['Content']['PYTHON'] . '</h5>';
echo '<p>' .$data['Content']['reseau'] . '</p><img src="' .$data['Content']['imageetoile'] .'"class="etoile">';
echo '<h2>' .$data['Content']['Langues'] . '</h2><img src="' .$data['Content']['imageetoile2'] .'"class="etoile2">';
echo '<p>' .$data['Content']['anglais'] . '</p><img src="' .$data['Content']['imageetoile'] .'"class="etoile">';
echo '<p>' .$data['Content']['espagnol'] . '</p><img src="' .$data['Content']['imageetoile'] .'"class="etoile">';