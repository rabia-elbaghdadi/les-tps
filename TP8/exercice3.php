<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de contact</title>
</head>
<body>
    <form action="" method="POST">
        Nom : <input type="text" name="nom"><br>
        Email : <input type="email" name="email"><br>
        Message : <textarea name="message"></textarea><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if (!empty($nom) && !empty($email) && !empty($message)) {
            echo "<h3>Message reçu :</h3>";
            echo "Nom : $nom <br>";
            echo "Email : $email <br>";
            echo "Message : $message <br>";
        } else {
            echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
        }
    }
    ?>
</body>
</html>
