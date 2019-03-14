<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LouNote</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="resources/sb-admin.css" rel="stylesheet">

</head>

<!-- Menu Début -->
  <?php include "app/header.php"?>
  <!-- Menu Fin -->

<body class="bg-dark">


  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Inscription</div>
      <div class="card-body">
        <form action="Db/dbInscription.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autofocus="autofocus">
                  <label for="nom">Nom</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="prenom" class="form-control" placeholder="prenom" required="required">
                  <label for="lastName">Prénom</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="mail" name="mail" class="form-control" placeholder="Mail" required="required">
              <label for="mail">Email address</label>
            </div>
          </div>
          <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="MDP" class="form-control" placeholder="Mot de passe" required="required">
                <label for="MDP">Mot de passe</label>
              </div>
          </div>
          <div class="form-group">
              <label for="classe">Classe</label>
              <select class="form-control" name="classe">
              <?php
                  include "app/connexionPDO.php";

                  $a = $db->query('SELECT * FROM classe');
                  $b = $a -> fetchAll();

                  foreach ($b as $row)
                 {
                      echo '<option value="'. $row['ID'] .'">'. $row['NomC'] . '</option>';
                 }
              ?>
              </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="submit">S'inscrire</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Page de connexion</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
