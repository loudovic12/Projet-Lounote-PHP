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
      <div class="card-header">Formulaire de retard</div>
      <div class="card-body">
        <form action="Db/dbRetardEtu.php" method="post">
          <div class="container">
            <div class="offset-2 col-md-8 col-xs-2">
                    <div class="form-area text-center">
                        <br>
                        <div class="form-group">
                        <input type="number" id="id" name="id" placeholder="ID">
                    </div>
                        <div class="form-group">
                        <input type="date" id="date" name="date" min="2019-01-01" max="2019-12-31">
                    </div>
                    </div>
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary btn-block" value="Ajouter le retard">
                  <a href="direction.php" class="btn btn-primary btn-block" title="Précédent">Retour</a>
                </div>
                </form>
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
