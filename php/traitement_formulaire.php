<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];

    // Valider les données (vous pouvez ajouter plus de validations)
    if (empty($nom) || empty($email) || empty($objet) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
    } else {
        // Envoyer le courriel (exemple avec la fonction mail())
        $destinataire = "divayamaury@gmail.com";
        $headers = "De : $email";

        if (mail($destinataire, $objet, $message, $headers)) {
            echo "Le message a été envoyé avec succès.";
        } else {
            echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard.";
        }
    }
}
?>
