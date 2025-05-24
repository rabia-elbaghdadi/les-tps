<!DOCTYPE html>
<html>
<head>
    <title>Livre d'or</title>
</head>
<body>
    <form method="POST">
        Nom : <input type="text" name="nom"><br>
        Message : <textarea name="message"></textarea><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST["nom"]);
        $message = htmlspecialchars($_POST["message"]);
        $date = date("d/m/Y H:i");

        if (!empty($nom) && !empty($message)) {
            $entry = "$date - $nom : $message\n";
            file_put_contents("messages.txt", $entry, FILE_APPEND);
        }
    }

    echo "<h3>Messages :</h3>";
    if (file_exists("messages.txt")) {
        $messages = file("messages.txt");
        foreach ($messages as $msg) {
            echo nl2br(htmlspecialchars($msg));
        }
    }
    ?>
</body>
</html>
