
<?php
session_start();

// Inicialitzar el comptador si no existeix encara
if (!isset($_SESSION['comptador_paraules'])) {
    $_SESSION['comptador_paraules'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(trim($_POST['frase']))) {
    $frase = strtolower(trim($_POST['frase']));

    // Separar paraules (per espais en blanc)
    $paraules = preg_split('/\s+/', $frase);

    foreach ($paraules as $p) {
        // Ignorar paraules buides per si hi ha espais dobles
        if ($p === '') continue;

        // Incrementar comptador acumulatiu
        if (isset($_SESSION['comptador_paraules'][$p])) {
            $_SESSION['comptador_paraules'][$p]++;
        } else {
            $_SESSION['comptador_paraules'][$p] = 1;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<title>Comptador acumulatiu de paraules</title>
</head>
<body>

<h2>Introdueix una frase</h2>

<form method="POST">
    <input type="text" name="frase" size="50" placeholder="Escriu aquí la frase..." required>
    <button type="submit">Enviar</button>
</form>

<?php if (!empty($_SESSION['comptador_paraules'])): ?>
    <h3>Paraules comptades:</h3>
    <ul>
        <?php
        foreach ($_SESSION['comptador_paraules'] as $paraula => $comptador) {
            echo "<li><strong>$paraula</strong>: $comptador</li>";
        }
        ?>
    </ul>
<?php endif; ?>

</body>
</html>
