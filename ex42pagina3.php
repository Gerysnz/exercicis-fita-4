
<!-- El text COINCIDÈNCIES
Un enllaç per tornar a ex42pagina1.php
Desmuntarem les paraules de frase1 i frase2 i les compararem:
Si al menys 1 paraula coincideix, es mostrarà el text:
“la paraula XXXX està a les dues frases”.
Si no hi ha cap paraula que coincideixi, es mostrarà el text:
“No hi ha cap coincidència.” -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex42pagina3</title>
</head>
<body>
    <h1>Exercici 42 pagina 3</h1>
    <?php
    session_start();
    $frase1 = $_SESSION['frase1'];
    $frase2 = $_POST['frase2'];
    // Desmuntar les frases en paraules, iterando seguro
    $paraules1 = explode(" ", $frase1);
    $paraules2 = explode(" ", $frase2);
        $coincidencies = [];
        foreach ($paraules1 as $paraula1) {
            foreach  ($paraules2 as $paraula2) {
                if ($paraula1 === $paraula2) {
                    //esta comprobando si la palabra ya está en el array para no repetirla
                    if (!in_array($paraula1, $coincidencies)){
                        array_push($coincidencies, $paraula1);
                    }
                }
    
        }
    }
 if (empty($coincidencies)) {
        echo "<p>No hi ha cap coincidència.</p>";
    } else {
        echo "la paraula <strong>" . implode(", ", $coincidencies) . "</strong> està a les dues frases.";
        

        }

    
?>

    
</body>
</html>
