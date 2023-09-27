<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamos de Quiz</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
<article> 

<?php 

$corretas = 0;

if ($_POST["pergunta1"] == "A") {
    $corretas++;
}
if ($_POST["pergunta2"] == "B") {
    $corretas++;
}
if ($_POST["pergunta3"] == "D") {
    $corretas++;
}
if ($_POST["pergunta4"] == "C") {
    $corretas++;
}
if ($_POST["pergunta5"] == "A") {
    $corretas++;
}
if ($_POST["pergunta6"] == "B") {
    $corretas++;
}
if ($_POST["pergunta7"] == "C") {
    $corretas++;
}
if ($_POST["pergunta8"] == "A") {
    $corretas++;
}
if ($_POST["pergunta9"] == "B") {
    $corretas++;
}
if ($_POST["pergunta10"] == "C") {
    $corretas++;
}

echo "<h2>Sua pontuação: $corretas/10</h2>";


?>

</form>
</article>
</body>
</html>