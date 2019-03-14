<?php
class InscManager{
private $_db;
public function __construct($db)
{
  $this->setDb($db);
}
public function setDb(PDO $db)
{
  $this->_db=$db;
}

public function Ajouter(Inscription $personne){
  $requete = $this->_db->prepare('INSERT INTO etudiants (Nom, Prenom, Mail, MDP, Classe)  VALUES (:nom,:prenom,:mail,:mdp,:classe)');
$requete->execute(array(
 'nom'=>$personne->nom(),
 'prenom'=>$personne->prenom(),
 'mail'=>$personne->email(),
 'mdp'=>$personne->mdp(),
 'classe'=>$personne->classe()
));

}
public function getList()
  {

    $requete = $this->_db->prepare("SELECT * FROM etudiants WHERE Mail=:mail");
  $requete->execute(array('mail'=>$_POST['mail']));
  $donnee=$requete->fetch();
  if($donnee)
  {
    if($_POST['mail']==$donnee['Mail'] && $_POST['MDP']==$donnee['MDP'])
    {
      //On vérifie que l'adresse email et le mot de passe existent dans la base de donnée
    setcookie('nom', $donnee['Nom'], time()+3600, '/');
      setcookie('prenom', $donnee['Prenom'], time()+3600, '/');
    session_start(); //On ouvre la session de l'utilisateur
    $_SESSION['prenom'] = $donnee['Prenom'];
    $_SESSION['nom'] = $donnee['Nom'];
    header('location: ../index.php');
  }
  }


$requete = $this->_db->prepare("SELECT * FROM professeurs WHERE Mail=:mail");
$requete->execute(array('mail'=>$_POST['mail']));
$donnee=$requete->fetch();
if($donnee)
{
  if($_POST['mail']==$donnee['Mail'] && $_POST['MDP']==$donnee['MDP'])
  {
    //On vérifie que l'adresse email et le mot de passe existent dans la base de donnée
  setcookie('professeurs', $donnee['Nom'], time()+3600, '/');
    setcookie('prenom', $donnee['Prenom'], time()+3600, '/');
  session_start(); //On ouvre la session de l'utilisateur
  $_SESSION['prenom'] = $donnee['Prenom'];
  $_SESSION['nom'] = $donnee['Nom'];
  header('location: ../index.php');
}
}

$requete = $this->_db->prepare("SELECT * FROM direction WHERE Mail=:mail");
$requete->execute(array('mail'=>$_POST['mail']));
$donnee=$requete->fetch();
if($donnee)
{
  if($_POST['mail']==$donnee['Mail'] && $_POST['MDP']==$donnee['MDP'])
  {
    //On vérifie que l'adresse email et le mot de passe existent dans la base de donnée
  setcookie('direction', $donnee['Nom'], time()+3600, '/');
    setcookie('prenom', $donnee['Prenom'], time()+3600, '/');
  session_start(); //On ouvre la session de l'utilisateur
  $_SESSION['prenom'] = $donnee['Prenom'];
  $_SESSION['nom'] = $donnee['Nom'];
  header('location: ../index.php');
}
}

}
}
?>
