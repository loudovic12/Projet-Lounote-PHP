<?php
include "../class/classdirection.php";
include "../manager/directionManager.php";
//on inclut les pages classdirection.php et directionManager.php dans la page de traitement
$etudiant = new Etudiant (['etudiants_id'=>$_POST['etudiants_id']]);  //on envoit la valeur contenue dans le post dans la classe Etudiant
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$m=$manager -> selectetuabs($etudiant);

//cette variable va appeler la fonction selectetu() se trouvant dans la classe directionManager
header('location: ../direction.php');//On est redirigé sur la page direction.php
 ?>
