<?php
include "../class/classdirection.php";
include "../manager/directionManager.php";
//on inclut les pages classdirection.php et directionManager.php dans la page de traitement
$etudiant = new Etudiant (['nom'=>$_POST['nom'],        //on envoit les valeurs contenues dans les post dans la classe Etudiant
                            'prenom'=>$_POST['prenom'],
                            'mail'=>$_POST['mail'],
                            'mdp'=>$_POST['mdp'],
                            'classe'=>$_POST['classe']]);
$db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
//On se connecte à la base de données lounote
$manager = new directionManager($db);
$manager->insertetu($etudiant);
//cette variable va appeler la fonction insertetu() se trouvant dans la classe directionManager
header('location: ../direction.php');//On est redirigé sur la page direction.php


 ?>
