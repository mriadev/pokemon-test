<?php
/**
 * Página principal del Quiz de Pokemoz 
 * 
 * @author María Cervilla Alcalde
 * 
*/
include('config/config.php')

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <h1>Juego: Adivina el pokemon</h1>
    <form action="quiz_pokemon.php" method="post">
        Generación: 
        <select name="generation">
            <?php
            foreach ($generations as $key => $value) {
                echo "<option >$key</option>";
            }
             
            ?>
        </select><br/>
        <input type="submit" name="send" value="Jugar" >
    </form>
</body>
</html>