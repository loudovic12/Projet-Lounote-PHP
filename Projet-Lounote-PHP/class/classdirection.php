<?php

 abstract class User   //Ici, la classe User et la classe mère, elle va
                      //permettre aux classes filles d'hériter des données se trouvant dans les variables nom, prenom, mail et mdp
 {
   protected $nom;
   protected $prenom;
   protected $mail;
   protected $mdp;
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
   public function setNom($nom)
   {
     // On vérifie qu'il s'agit bien d'une chaîne de caractères.
     // Dont la longueur est inférieure à 30 caractères.
     if (is_string($nom) && strlen($nom) <= 30)
     {
       $this->nom = $nom;
     }
   }

   public function setPrenom($prenom)
   {
     // On vérifie qu'il s'agit bien d'une chaîne de caractères.
     // Dont la longueur est inférieure à 30 caractères.
     if (is_string($prenom) && strlen($prenom) <= 30)
     {
       $this->prenom = $prenom;
     }
   }
    public function setMail($mail)
    {
      // On vérifie qu'il s'agit bien d'une chaîne de caractères.
      // Dont la longueur est inférieure à 30 caractères.
      if (is_string($mail) && strlen($mail) <= 30)
      {
        $this->mail = $mail;
      }
    }
    public function setMdp($mdp)
    {
      // On vérifie qu'il s'agit bien d'une chaîne de caractères.
      // Dont la longueur est inférieure à 30 caractères.
      if (is_string($mdp) && strlen($mdp) <= 30)
      {
        $this->mdp = $mdp;
      }
    }

    public function nom() { return $this->nom; }
    public function prenom() { return $this->prenom; }
    public function mail() { return $this->mail; }
    public function mdp() { return $this->mdp; }


 }
 class Direction extends User   //la classe Direction est une classe fille qui va hériter des valeurs contenues dans la classe mère User
 { protected $id;
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





     class Professeur extends User  //la classe Professeur est une classe fille qui va hériter des valeurs contenues dans la classe mère User

     {
protected $id;
protected $classe;    //on initialise les variables ne se trouvant pas dans la classe mère
protected $presprof;
protected $attributs=[];
public function __get($presprof){
if(isset($this->attributs[$presprof]))
{
  return $this->attributs[$presprof];
}
}
public function __isset($presprof)
{
  return isset($this->attributs[$presprof]);
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

         public function setClasse($classe)
         {
           $classe = (int) $classe;
             $this->classe = $classe;
          }
          public function setPresprof($presprof)
          {
            $presprof = (int) $presprof;
              $this->presprof = $presprof;
           }
           public function setId($id){
             $id = (int) $id;
               $this->id = $id;
           }
           public function id() { return $this->id; }

           public function classe() { return $this->classe; }
            public function presprof() { return $this->presprof; }

         }
    class Etudiant extends User  //la classe Etudiant est une classe fille qui va hériter des valeurs contenues dans la classe mère User
    {

      protected $classe;  //on initialise les variables ne se trouvant pas dans la classe mère
      protected $pres;
      protected $attributs = [];
      public function __get($pres){
      if(isset($this->attributs[$pres]))
      {
        return $this->attributs[$pres];
      }
      }
      public function __isset($pres)
      {
        return isset($this->attributs[$pres]);
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

      public function setClasse($classe)
      {
        $classe = (int) $classe;
          $this->classe = $classe;
       }
       public function setPres($pres)
       {
         $pres = (int) $pres;
           $this->pres = $pres;
        }
        public function classe() { return $this->classe; }
        public function pres()  {return $this->pres;}
    }


 ?>
