
<!-- El text ENREGISTRA FRASE 2
Guardarem el text “frase1” a la variable de sessió amb la clau “frase1”.
Un formulari per introduir un camp de text, amb el name del formuari=“frase2”. 
El formulari s’envia a la pàgina ex42pagina3.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex42pagina2</title>
</head>
<body>
    <?php
    session_start();

    $_SESSION['frase1'] = $_POST['frase1'];


    ?>

    <h1>Exercici 42 pagina 2</h1><br><br>
    <form  action="ex42pagina3.php" method="post">
    <label for ="frase2">Enregistra frase dos:</label><br>
    <input type="text" id="frase2" name="frase2"><br><br>
    <input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>
