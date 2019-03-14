<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Direction</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="resources/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Direction</a>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <?php include "app/header.php"?>

  </ul>

</nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Cours</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="Ajoutcours.php">Ajouter</a>
            <a class="dropdown-item" href="ModifCours.php">Modifier</a>
            <a class="dropdown-item" href="SuppCours.php">Supprimer</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="noterabsenceeleve.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Absence Eleves</span></a>
        </li>
      </ul>

    <div id="content-wrapper">

              <div>
      <div class="card-header"><h3>Noter une absence</h3></div>

        <?php

        include "class/classdirection.php";
        include "manager/directionManager.php";
        //on inclut les pages classdirection.php et directionManager.php dans la page de traitement

        $db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
        //On se connecte à la base de données lounote
        $manager = new directionManager($db);
        $ma=$manager -> selectetu();
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
                    <th>Retard</th>

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
                        <td><a class="nav-link" href="absenceeleve.php">
                          <span>Absent</span></a></td>
                      <td><a class="nav-link" href="retardeleve.php">
                        <span>Retard</span></a></td>

                    </tr>

                      </tr>


        <?php } ?>
          </table>



  </div>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Lycée Le Corbusier 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
