<?php
/**
 * Resultado del quiz
 * 
 */


include('config/config.php');
include('include/include.php');

$count = 0;

if (!isset($_POST['send'])){
    header('Location: index.php');
};

$solutions = $_POST['solution'];

foreach ($solutions as $key => $value) {
   if ($key == $value) {
    $count++;
   }
}

$_POST[] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions Pokemon Quiz</title>
</head>
<body>
    <h1>Soluciones</h1>
    <h3>Has acertado <?php echo $count."/".NUMPOKEMON; ?></h3>
    <ol>
<?php
    foreach ($solutions as $key => $value) {
    echo "<li>".$key."</li>";
 
   }

   ?>
   </ol>


   <a href="index.php">Reiniciar</a>
</body>
</html>