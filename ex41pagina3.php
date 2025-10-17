<?php
session_start();

$message = "";
$showForm = true;
$showLink = false;

// Verificar si s'ha enviat la dada "endevina"
if (isset($_POST['endevina'])) {
    $endevina = (int)$_POST['endevina'];
    $ocult = $_SESSION['ocult'];
    
    if ($endevina == $ocult) {
        $message = "Felicitats! Has endevinat el nombre correcte: " . $ocult;
        $showForm = false;
        $showLink = true;
    } elseif ($endevina < $ocult) {
        $message = "El nombre que busques és major que " . $endevina;
    } else {
        $message = "El nombre que busques és menor que " . $endevina;
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevina el Nombre</title>
</head>
<body>
    <h1>ENDEVINA EL NOMBRE</h1>
    
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    
    <?php if ($showForm): ?>
        <form action="ex41pagina3.php" method="POST">
            <label for="endevina">Introdueix el teu número:</label>
            <input type="number" id="endevina" name="endevina" required>
            <button type="submit">Endevinar</button>
        </form>
    <?php endif; ?>
    
    <?php if ($showLink): ?>
        <p><a href="ex41pagina1.php">Tornar a començar</a></p>
    <?php endif; ?>
</body>
</html>