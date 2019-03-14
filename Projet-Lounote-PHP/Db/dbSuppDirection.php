<?php
include "../class/classdirection.php";
include "../manager/directionManager.php";
//on inclut les pages classdirection.php et directionManager.php dans la page de traitement
$direction = new Direction (['id'=>$_POST['id']]);  //on envoit la valeur contenue dans le post dans la classe Direction
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$manager -> delete($direction);
//cette variable va appeler la fonction delete() se trouvant dans la classe directionManager
header('location: ../direction.php');//On est redirigé sur la page direction.php
 ?>
