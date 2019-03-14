<?php
include "../class/classdirection.php";
include "../manager/directionManager.php";
//on inclut les pages classdirection.php et directionManager.php dans la page de traitement
$etudiant = new Etudiant (['mail'=>$_POST['mail'],'pres'=>$_POST['pres']]); //on envoit les valeurs contenues dans les post dans la classe Etudiant
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$manager -> updateetu($etudiant);
//cette variable va appeler la fonction updateetuf() se trouvant dans la classe directionManager
header('location: ../direction.php');//On est redirigé sur la page direction.php
 ?>
