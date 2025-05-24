<?php
$questions = [
    "Quelle est la capitale de la France ?" => ["Paris", "Londres", "Berlin", "Rome"],
    "Combien font 3 + 4 ?" => ["5", "7", "8", "6"],
    "Quel est le langage utilisé pour les pages web ?" => ["Python", "HTML", "C++", "Java"]
];

$reponsesCorrectes = ["Paris", "7", "HTML"];
$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Résultats :</h3>";
    $i = 0;
    foreach ($questions as $question => $choix) {
        $userAnswer = $_POST["q$i"] ?? "";
        $correctAnswer = $reponsesCorrectes[$i];
        echo "<strong>$question</strong><br>";
        if ($userAnswer == $correctAnswer) {
            echo "✔ Bonne réponse : $userAnswer <br><br>";
            $score++;
        } else {
            echo "❌ Mauvaise réponse. Votre réponse : $userAnswer. Réponse correcte : $correctAnswer <br><br>";
        }
        $i++;
    }
    echo "<strong>Score final : $score / " . count($questions) . "</strong>";
    exit();
}
?>

<form method="POST">
<?php
$i = 0;
foreach ($questions as $question => $choix) {
    echo "<p>$question</p>";
    foreach ($choix as $val) {
        echo "<input type='radio' name='q$i' value='$val'> $val <br>";
    }
    $i++;
}
?>
<input type="submit" value="Valider">
</form>
