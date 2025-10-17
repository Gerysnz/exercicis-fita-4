<?php
session_start();

// Guardar el nombre ocult a la variable de sessió
if (isset($_POST['ocult'])) {
    $_SESSION['ocult'] = (int)$_POST['ocult'];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Enregistrat</title>
</head>
<body>
    <h1>NOMBRE ENREGISTRAT</h1>
    
    <p>El nombre ha estat guardat correctament.</p>
    
    <a href="ex41pagina3.php">Endevinar</a>
</body>
</html>