<?php
require "./../Yaml/vendor/autoload.php";
use Symfony\Component\Yaml\Yaml;


// Charger le fichier YAML
$yamlContent = file_get_contents('./../Yaml/experiences.yaml');

// Parser le contenu YAML
$experiences = yaml_parse($yamlContent);

// Vérifier si le fichier YAML a été correctement parsé
if ($experiences !== null) {
    // Afficher les expériences
    foreach ($experiences as $experience) {
        echo "<h2>" . $experience['entreprise'] . "</h2>";
        echo "<p><strong>Poste:</strong> " . $experience['poste'] . "</p>";
        echo "<p><strong>Période:</strong> Du " . $experience['debut'] . " au " . $experience['fin'] . "</p>";
        echo "<p><strong>Lieu:</strong> " . $experience['lieu'] . "</p>";
        echo "<p><strong>Tâches:</strong></p>";
        echo "<ul>";
        foreach ($experience['taches'] as $tache) {
            echo "<li>" . $tache . "</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Erreur de lecture du fichier YAML.";
}
?>

