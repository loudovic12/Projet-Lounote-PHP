<?php
abstract class Content{
protected $matiere;
protected $classe;
protected $cours;

public function __construct(array $donnees)
{
  $this->hydrate($donnees);
}

  // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);

      // Si le setter correspondant existe.
      if (method_exists($this, $method))
      {
        // On appelle le setter.
        $this->$method($value);
      }
    }
  }

public function setMatiere($matiere)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  // Dont la longueur est inférieure à 30 caractères.
  if (is_string($matiere) && strlen($matiere) <= 30)
  {
    $this->matiere = $matiere;
  }
}
public function setClasse($classe)
{
  $classe = (int) $classe;
    $this->classe = $classe;
 }


public function setCours($cours)
{
  // On vérifie qu'il s'agit bien d'une chaîne de caractères.
  // Dont la longueur est inférieure à 30 caractères.
  if (is_string($cours) && strlen($cours) <= 30)
  {
    $this->cours = $cours;
  }
}
public function matiere() { return $this->matiere; }
public function classe() { return $this->classe; }
public function cours() { return $this->cours; }

}
class Cours extends Content{

  protected $id;
  protected $attributs=[];
  public function __get($id){
  if(isset($this->attributs[$id]))
  {
    return $this->attributs[$id];
  }
  }
  public function __isset($id)
  {
    return isset($this->attributs[$id]);
  }
  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }

    // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
    public function hydrate(array $donnees)
    {
      foreach ($donnees as $key => $value)
      {
        // On récupère le nom du setter correspondant à l'attribut.
        $method = 'set'.ucfirst($key);

        // Si le setter correspondant existe.
        if (method_exists($this, $method))
        {
          // On appelle le setter.
          $this->$method($value);
        }
      }
    }


  public function setId($id){
    $id = (int) $id;
      $this->id = $id;
  }
  public function id() { return $this->id; }
}


 ?>
