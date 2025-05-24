<?php
// Sécurisation des données
$nom = strip_tags($_POST['nom']);
$prenom = strip_tags($_POST['prenom']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

echo "<h1>Merci pour votre message !</h1>";
echo "<p><strong>Nom :</strong> $nom</p>";
echo "<p><strong>Prénom :</strong> $prenom</p>";
echo "<p><strong>Email :</strong> $email</p>";
echo "<p><strong>Message :</strong> $message</p>";
?>
