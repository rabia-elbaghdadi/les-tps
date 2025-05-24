<form method="post">
    <label>Longueur du mot de passe : </label>
    <input type="number" name="length" min="4" required>
    <button type="submit">Générer</button>
</form>

<?php
function generer_mot_de_passe($longueur) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $mot_de_passe = '';
    for ($i = 0; $i < $longueur; $i++) {
        $mot_de_passe .= $chars[rand(0, strlen($chars)-1)];
    }
    return $mot_de_passe;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = intval($_POST["length"]);
    echo "Mot de passe généré : " . generer_mot_de_passe($length);
}
?>
