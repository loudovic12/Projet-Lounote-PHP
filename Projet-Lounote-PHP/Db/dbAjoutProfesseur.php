<?php
include "../class/classDirection.php";
include "../manager/directionManager.php";
//on inclut les pages classDirection.php et directionManager.php dans la page de traitement
$professeur = new Professeur (['nom'=>$_POST['nom'],
                            'prenom'=>$_POST['prenom'],
                            'mail'=>$_POST['mail'],
                            'mdp'=>$_POST['mdp'],
                            'classe'=>$_POST['classe']]);
                            //on envoit les valeurs contenues dans les post dans la classe Professeur
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$manager -> insertprof($professeur);
//cette variable va appeler la fonction insertprof() se trouvant dans la classe directionManager
header('location: ../direction.php');//On est redirigé sur la page direction.php
 ?>
