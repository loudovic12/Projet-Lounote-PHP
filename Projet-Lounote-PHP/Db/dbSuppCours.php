<?php
include "../class/classCours.php";
include "../manager/coursManager.php";
//on inclut les pages classCours.php et coursManager.php dans la page de traitement
$cours = new Cours (['id'=>$_POST['id']]);  //on envoit la valeur contenue dans le post dans la classe Cours
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new coursManager($db);
$manager -> deletecours($cours);
//cette variable va appeler la fonction deletecours() se trouvant dans la classe coursManager
header('location: ../professeurs.php');//On est redirigé sur la page professeurs.php
 ?>
