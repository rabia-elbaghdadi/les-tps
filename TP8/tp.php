<form method="post">
    <input type="number" name="a" required>
    <input type="number" name="b" required>
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Soustraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select>
    <button type="submit">Calculer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $op = $_POST["operation"];
    $result = "";

    switch ($op) {
        case "add": $result = $a + $b; break;
        case "sub": $result = $a - $b; break;
        case "mul": $result = $a * $b; break;
        case "div": $result = $b != 0 ? $a / $b : "Erreur : division par zéro"; break;
    }

    echo "Résultat : $result";
}
?>
