<?php
session_start();
?>
<!-- Farem una “màquina d’escriure” o un “teclat en pantalla” que anirà enregistrant i mostrant els caràcters que anem clicant.  -->

<!-- Un mínim de 10 enllaços amb 10 lletres diferents (millor si fas tot l’abecedari).
Cada enllaç tindrà associada una lletra i l’enviarà amb mètode GET a la mateixa pàgina actual.
En una variable de sessió anirem acumulant les lletres que l’usuari vagi marcant, 
i les mostrarem en un quadre de text a dalt de la pàgina, sobre el «teclat virtual». -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Màquina d'escriure</title>
</head>
<style>
    a{
        font-size: 1rem;
        padding: 1rem;
        text-decoration: none;
    }
    
</style>
<body>
    <h1>Màquina d'escriure</h1>
    <?php
    // session_start() ya está al principio
    if (!isset($_SESSION['text'])) {
        $_SESSION['text'] = "";
    }
    // Si se pulsa borrar, limpiar el texto
    if (isset($_POST['borrar'])) {
        $_SESSION['text'] = "";
    }
    // Si se pulsa una letra, añadirla
    if (isset($_GET['lletra'])) {
        $_SESSION['text'] .= $_GET['lletra'];
    }

    // Mostrar el texto acumulado en un input readonly
    echo "<label>Text acumulat:</label><br>";
    echo "<input type='text' value='" . htmlspecialchars($_SESSION['text']) . "' readonly style='width:300px;font-size:1.2rem;'><br><br>";

    // Mostrar el teclado virtual
    $letras = ["a","b","c","d","e","f","g","h","i","j", "k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    foreach ($letras as $letra) {
        echo "<a href='?lletra=$letra'>$letra</a>";
    }

    // Botón borrar
    echo "<form action='' method='post' style='margin-top:20px;'>";
    echo "<input type='submit' value='Borrar' name='borrar'>";
    echo "</form>";
    

    
  

    
    


?>


    
</body>
</html>