<?php
include "../class/classAbsence.php";
include "../manager/directionManager.php";
//on inclut les pages classAbsence.php et directionManager.php dans la page de traitement
$absence = new Absence (['id'=>$_POST['id'],  //on envoit les valeurs contenues dans les post dans la classe Absence
                     'date'=>$_POST['date']]);

$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$manager -> insertretardetu($absence);
//cette variable va appeler la fonction insertabsprof() se trouvant dans la classe coursManager
header('location: ../professeurs.php');//On est redirigé sur la page direction.php


 ?>
