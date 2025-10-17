
<!-- El text ENREGISTRA FRASE Un -->
 <!--formulari per introduir un camp de text, amb el name del camp del formuari = “frase1”. 
 El formulari s’envia a la pàgina ex42pagina2.php-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex42pagina1</title>
 </head>
 <body>
   <h1>Exercici 42 pagina 1</h1><br><br>
    <form  action="ex42pagina2.php" method="post">
    <label for ="frase1">Enregistra frase un:</label><br>
    <input type="text" id="frase1" name="frase1"><br><br>
    <input type="submit" value="Enviar">
    </form>



    


    
 </body>
 </html>
