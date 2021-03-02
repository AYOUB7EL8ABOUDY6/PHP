<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop2</title>
</head>
<body>
<!-- Step1 -->
    <!-- 1 - Produire l'affichage des entiers de 1 à 10 à l'aide d'une boucle while.  -->
   
   <?php 
$x = 1;

while($x <= 10) {
  echo "The number is: $x <br>";
  $x++;
}
    ?>

<!-- 2 - Idem avec une boucle for. -->
<?php 
 
    function boucle($var){
    for ($x = 0; $x <= $var; $x++) {
    echo "The number is: $x <br>";
    }
    }
    boucle(20); 
?>

<!-- Step2 -->
    <!-- Step2 #1 - Formulaire Age -->
    <form action="index2.php" method="POST" style="margin-left:500px;">
    <input type="text" name="name" placeholder="nom"> <br>
    <input type="text" name="age" placeholder="age"> <br>
    <input type="text" name="sexe" placeholder="sexe"> <br>
    <button type="submit">submit</button><br>
    </form>
<?php
//    var_dump($_get);
if(!empty($_POST)){
    $name =  $_POST["name"];
    $age =  $_POST["age"];
    $sexe =  $_POST["sexe"];
  
      echo " « Bienvenu $sexe $name, vous avez $age ans. »";
    
  }
?>

    <!-- Step2  #2 - Produit -->

    <form action="index2.php" method="POST" style="margin-left:950px;">
    <input type="text" name="a" placeholder="entrer a">
    <input type="text" name="b" placeholder="entrer b">
    <button type="valider">valider</button>
    </form>
    
    <?php

    if(!empty($_POST)) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    echo "<table border=1>";
    for ($i=1 ; $i<=$a ; $i++) {
        echo "<tr>";
        for ($j=1 ; $j<=$b ; $j++) {
            echo "<td>".$i*$j."</td>" ;
        }
        echo "</tr>";
    }
    }
    echo "</table>";

?>

</body>
</html>