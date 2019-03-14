<?php
include "../class/classCours.php";
include "../manager/coursManager.php";
//on inclut les pages classCours.php et coursManager.php dans la page de traitement
$cours = new Cours (['matiere'=>$_POST['matiere'],  //on envoit les valeurs contenues dans les post dans la classe Cours
                     'classe'=>$_POST['classe'],
                     'cours'=>$_POST['cours']]);

$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new coursManager($db);
$manager -> insertcours($cours);
//cette variable va appeler la fonction insertcours() se trouvant dans la classe coursManager
header('location: ../professeurs.php');//On est redirigé sur la page professeurs.php


 ?>
