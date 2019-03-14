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
      <div class="card-header"><h3>Noter une absence</h3></div>

        <?php

        include "class/classdirection.php";
        include "manager/directionManager.php";
        //on inclut les pages classdirection.php et directionManager.php dans la page de traitement

        $db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
        //On se connecte à la base de données lounote
        $manager = new directionManager($db);
        $ma=$manager -> selectprof();
        //cette variable va appeler la fonction selectetu() se trouvant dans la classe directionManager
      ?>

          <table class="table table-bordered">
            <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Email</th>
                  <th>Classe</th>
                  <th>Abscence</th>
                </tr>
              </thead>
<div class="card-body">

        <?php  foreach ($ma as $m){
              ?>
              <tr>


                        <td> <?php echo $m['Nom'];?></td>
                        <td> <?php echo $m['Prenom']; ?></td>
                        <td> <?php echo $m['Mail']; ?></td>
                        <td> <?php echo $m['NomC'];?> </td>
                        <td>  <a class="nav-link" href="">
                          <span>Absent</span></a></td>

                      </tr>


        <?php } ?>
          </table>

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
