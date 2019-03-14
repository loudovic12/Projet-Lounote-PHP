<?php
//la classe directionManager nous permet d'avoir sur une seule page toutes les requêtes permettant de définir les données des différentes tables
class coursManager{
private $_db;
public function __construct($db)
{
  $this->setDb($db);
}
public function setDb(PDO $db)
{
  $this->_db=$db;
}
                        //FONCTIONNALITES CONCERNANT LA DIRECTION
public function insertcours(Cours $cours){
  $requete = $this->_db->prepare('INSERT INTO cours (Matiere, Classe, Contenu)  VALUES (:matiere,:classe,:cours)');
$requete->execute(array(
 'matiere'=>$cours->matiere(),
 'classe'=>$cours->classe(),
 'cours'=>$cours->cours()));
}
public function updatecours(Cours $cours){
  $requete = $this->_db->prepare('UPDATE cours SET Matiere=:matiere, Classe=:classe, Contenu=:cours  WHERE ID =:id');
  $requete->execute(array(
   'matiere'=>$cours->matiere(),
   'classe'=>$cours->classe(),
   'cours'=>$cours->cours(),
   'id'=>$cours->id()));
}
public function deletecours(Cours $cours)
  {
    $this->_db->exec('DELETE FROM cours WHERE ID= '.$cours->id());
  }
  public function selectcours(Cours $cours)
  {
    $requete= $this->_db->prepare('SELECT Matiere, Contenu, NomC FROM cours INNER JOIN classe ON cours.Classe=classe.ID WHERE Classe=:classe');
    $requete->execute(array(
      'classe'=>$cours->classe()));
      $donnee=$requete->fetchAll();



    return $donnee;
  }
}
?>
