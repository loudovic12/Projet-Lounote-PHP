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

  <!-- Menu Début -->
    <?php include "app/header.php"?>
    <!-- Menu Fin -->

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Connexion</div>
      <div class="card-body">
        <form action="Db/dbConnexion.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="mail" id="mail" name = "mail" class="form-control" placeholder="Mail" required="required" autofocus="autofocus">
              <label for="mail">Mail</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="MDP" name = "MDP" class="form-control" placeholder="Mot de passe" required="required">
              <label for="MDP">Mot de Passe</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
            </div>
          </div>
          <button type="submit" name = "submit" class="btn btn-primary btn-block">Se connecter</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Inscription</a>
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
