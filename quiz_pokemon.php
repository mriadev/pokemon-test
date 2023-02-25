<?php 
/**
 * Adivina el nombre de los pokemon que aparezcan
 *@author María Cervilla Alcalde 
 */

 include('config/config.php');
 include('include/include.php');

 $generation = $pokedex[$_POST['generation']];
 $initGeneration = $generations[$_POST['generation']][0];
 $endGeneration = $generations[$_POST['generation']][1];

$randomPokemon = [];

if (!isset($_POST['send'])){
    header('Location: index.php');
};

for ($i = 0; $i < NUMPOKEMON; $i++) {
    do {
        $pokemon = mt_rand($initGeneration, $endGeneration);
        
    } while (existePokemon($pokemon, $randomPokemon));

    $randomPokemon[] = $pokemon;
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Pokémon</title>
</head>
<body>
    <h1>¿Cuáles son estos pokemon de <?php echo $_POST['generation'] ?>?</h1>

    <form action="solution.php" method="post">
    <?php
   foreach ($randomPokemon as $key => $value) {
    echo "Nº de pokedex: ".$value."<br/>";
    echo "<img src='img/".($value).".png'></img><br/>";
    echo "<input type='text' name='solution[".$generation[$value]."]'>";
    echo "<br/><br/><br/>";
    
   }
   echo "<input type='submit' name='send' value='Enviar'>"; 
    ?>
    </form>
</body>
</html>