<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Etudiants</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="resources/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Etudiants</a>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <?php include "app/header.php"?>

    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="voircours.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Cours</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <?php
        if(isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
        }
        elseif(isset($_COOKIE['nom'])) {
        include("app/connexionPDO.php");

        $id = $_COOKIE['nom'];
        $req = $db->query ('SELECT * FROM etudiants WHERE Nom="'.$id.'"'); //Requête SQL permettant de récupéré les données correspand à la valeur contenu dans le cookie de direction

        $donnees= $req->fetch(); ?>


                <h5>Bienvenue</h5>
                <p>Nom : <?php echo $donnees['Nom']; ?></p> <!---On affiche les données récupérées-->
                <p>Prenom : <?php echo $donnees['Prenom']; ?></p>
                <p>Email : <?php echo $donnees['Mail']; }?></p>

        <?php
        if(isset($_POST['classe']))
        {
        include "class/classCours.php";
        include "manager/coursManager.php";
        //on inclut les pages classCours.php et coursManager.php dans la page de traitement
        $cours = new Cours (['classe'=>$_POST['classe']]);  //on envoit la valeur contenue dans le post dans la classe Cours
        $db = new PDO('mysql:host=localhost;dbname=lounote', 'root', '');
        //On se connecte à la base de données lounote
        $manager = new coursManager($db);
        $ma=$manager -> selectcours($cours);
        //cette variable va appeler la fonction selectcours() se trouvant dans la classe coursManager
      ?>

          <table class="table table-bordered">
            <thead>
                <tr>
                  <th>Classe</th>
                  <th>Matière</th>
                  <th>Contenu</th>

                </tr>
              </thead>


        <?php  foreach ($ma as $m){
              ?>
              <tr>


                        <td> <?php echo $m['NomC'];?></td>
                        <td> <?php echo $m['Matiere']; ?></td>
                        <td> <?php echo $m['Contenu']; ?></td>

                      </tr>


        <?php }} ?>

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
