<?php
//la classe directionManager nous permet d'avoir sur une seule page toutes les requêtes permettant de définir les données des différentes tables
class directionManager{
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
public function insert(Direction $direction){
  $requete = $this->_db->prepare('INSERT INTO direction (Nom, Prenom,Mail,MDP)  VALUES (:nom,:prenom,:mail,:mdp)');
$requete->execute(array(
 'nom'=>$direction->nom(),
 'prenom'=>$direction->prenom(),
 'mail'=>$direction->mail(),
 'mdp'=>$direction->mdp()));
}
public function update(Direction $direction)
{
$requete = $this->_db->prepare('UPDATE direction SET Nom=:nom, Prenom=:prenom, MDP=:mdp WHERE Mail = :mail');
$requete->execute(array(
 'nom'=>$direction->nom(),
 'prenom'=>$direction->prenom(),
 'mail'=>$direction->mail(),
 'mdp'=>$direction->mdp()));
}
public function delete(Direction $direction)
  {
    $this->_db->exec('DELETE FROM direction WHERE ID= '.$direction->id());
  }

                                  //FONCTIONNALITES CONCERNANT LES PROFESSEURS
  public function insertprof(Professeur $professeur){
    $requete = $this->_db->prepare("INSERT INTO professeurs (Nom, Prenom,Mail,MDP,Classe)  VALUES (:nom,:prenom,:mail,:mdp,:classe)");
  $requete->execute(array(
   'nom'=>$professeur->nom(),
   'prenom'=>$professeur->prenom(),
   'mail'=>$professeur->mail(),
   'mdp'=>$professeur->mdp(),
   'classe'=>$professeur->classe()));
  }

public function updateprof(Professeur $professeur)
{
$requete = $this->_db->prepare('UPDATE professeurs SET Nom=:nom, Prenom=:prenom, MDP=:mdp, Classe=:classe, PresProf=:presprof WHERE Mail = :mail');
$requete->execute(array(
 'nom'=>$professeur->nom(),
 'prenom'=>$professeur->prenom(),
 'mdp'=>$professeur->mdp(),
 'mail'=>$professeur->mail(),
 'classe'=>$professeur->classe(),
 'presprof'=>$professeur->presprof()
));
}
public function deleteprof(Professeur $professeur)
  {
    $this->_db->exec('DELETE FROM professeurs WHERE ID= '.$professeur->id());
  }
                                ////FONCTIONNALITES CONCERNANT LES ETUDIANTS
  public function insertetu(Etudiant $etudiant){
    $requete = $this->_db->prepare('INSERT INTO etudiants (Nom, Prenom,Mail,MDP,Classe)  VALUES (:nom,:prenom,:mail,:mdp,:classe)');
    $requete->execute(array(
   'nom'=>$etudiant->nom(),
   'prenom'=>$etudiant->prenom(),
   'mail'=>$etudiant->mail(),
   'mdp'=>$etudiant->mdp(),
   'classe'=>$etudiant->classe())); echo $etudiant->mdp();
  }
  public function updateetu(Etudiant $etudiant)
  {
  $requete = $this->_db->prepare('UPDATE etudiants SET Presence=:pres  WHERE Mail = :mail');
  $requete->execute(array(
    'mail'=>$etudiant->mail(),
  'pres'=>$etudiant->pres()));
  }
                                                    //FONCTIONNALITE PERMETTANT D'AFFCHIER LES ELEVES PAR CLASSE
  public function selectetu()
  {
    $requete= $this->_db->query('SELECT Nom, Prenom, Mail, NomC FROM etudiants INNER JOIN classe ON etudiants.Classe=classe.ID ORDER BY Classe ASC');
      $donnee=$requete->fetchAll();



    return $donnee;
  }

  public function selectetuabs()
  {
      $requete= $this->_db->query('SELECT Date_absence, COUNT(etudiants_id), Nom, Prenom FROM absence INNER JOIN etudiants ON etudiants.ID=absence.etudiants_id GROUP BY etudiants.ID ');
      $donnee=$requete->fetchAll();

      return $donnee;
  }
  public function selectprof()
  {
    $requete= $this->_db->query('SELECT professeurs.ID, Nom, Prenom, Mail, NomC FROM professeurs INNER JOIN classe ON professeurs.Classe=classe.ID ORDER BY Classe ASC');
    $donnee=$requete->fetchAll();

    return $donnee;
  }

  public function selectprofabs()
  {
      $requete= $this->_db->query('SELECT Date_absence, COUNT(professeurs_id), Nom, Prenom FROM absence INNER JOIN professeurs ON professeurs.ID=absence.professeurs_id GROUP BY professeurs.ID ');
      $donnee=$requete->fetchAll();

      return $donnee;
  }
  public function selectretardetu()
{$requete = $this->_db->query('SELECT Nom, Prenom, date_retard, COUNT(etudiants_id) FROM absence INNER JOIN etudiants ON absence.etudiants_id=etudiants.ID GROUP BY etudiants.ID');
    $donnee=$requete->fetchAll();
    return $donnee;
  }
  public function insertabsprof(Absence $absence){
    $requete = $this->_db->prepare('INSERT INTO absence (professeurs_id, Date_absence)  VALUES (:id,:date)');
    $requete->execute(array(
   'id'=>$absence->id(),
   'date'=>$absence->date()));
  }
  public function insertabsetu(Absence $absence){
    $requete = $this->_db->prepare('INSERT INTO absence (etudiants_id, Date_absence)  VALUES (:id,:date)');
    $requete->execute(array(
   'id'=>$absence->id(),
   'date'=>$absence->date()));
  }
  public function insertretardetu(Absence $absence){
    $requete = $this->_db->prepare('INSERT INTO retards (etudiants_id, date_retard)  VALUES (:id,:date)');
    $requete->execute(array(
   'id'=>$absence->id(),
   'date'=>$absence->date()));
  }

}
?>
