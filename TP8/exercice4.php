<?php
session_start();

// Déconnexion
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: authentification.php");
    exit();
}

// Si l'utilisateur est déjà connecté
if (isset($_SESSION["username"])) {
    echo "<h2>Bienvenue, " . $_SESSION["username"] . " !</h2>";
    echo '<a href="?logout=true">Déconnexion</a>';
    exit();
}

// Traitement du formulaire
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"] ?? '';
    $pass = $_POST["password"] ?? '';

    // Identifiants valides (à modifier selon le besoin)
    $validUser = "admin";
    $validPass = "1234";

    if ($user === $validUser && $pass === $validPass) {
        $_SESSION["username"] = $user;
        header("Location: authentification.php");
        exit();
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        Identifiant : <input type="text" name="username"><br><br>
        Mot de passe : <input type="password" name="password"><br><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
