<?php
include "../class/classdirection.php";
include "../manager/directionManager.php";
//on inclut les pages classdirection.php et directionManager.php dans la page de traitement
$direction = new Direction(['nom'=>$_POST['nom'],
                            'prenom'=>$_POST['prenom'],
                            'mail'=>$_POST['mail'],
                            'mdp'=>$_POST['mdp']]);
                             //on envoit les valeurs contenues dans les post dans la classe Direction
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$manager -> insert($direction);
//cette variable va appeler la fonction insert() se trouvant dans la classe directionManager
header('location: ../direction.php');//On est redirigé sur la page direction.php
 ?>
