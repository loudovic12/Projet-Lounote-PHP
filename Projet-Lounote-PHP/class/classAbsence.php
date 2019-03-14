<?php
class absence
{
  protected $id;
protected $date;

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

  public function setId($id)
  {
    $id = (int) $id;
      $this->id = $id;
   }

public function setDate($date)
{
  $this->date=$date;
}
public function id() { return $this->id; }
public function date() { return $this->date; }
}
 ?>
