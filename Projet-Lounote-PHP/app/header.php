<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Lycée Le Corbusier</title>
	<meta charset="UTF-8">
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="index.php">Lycée Le Corbusier</a>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<?php
				if(isset($_COOKIE['nom'])) { ?>
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="etudiants.php">
					<?php
				session_start();
				echo   $_SESSION['nom'] .' ';
				echo   $_SESSION['prenom'];
				?></a></li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="Db/dbDeconnexion.php">Deconnexion</a>
				</li>
			<?php } elseif(isset($_COOKIE['professeurs'])) { ?>
				<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="professeurs.php">
				<?php
			session_start();
			echo   $_SESSION['nom'] .' ';
			echo   $_SESSION['prenom'];
			?></a></li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="Db/dbDeconnexion.php">Deconnexion</a>
			</li>
		<?php } elseif(isset($_COOKIE['direction'])) { ?>
			<li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="direction.php">
			<?php
		session_start();
		echo   $_SESSION['nom'] .' ';
		echo   $_SESSION['prenom'];
		?></a></li>
		<li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="Db/dbDeconnexion.php">Deconnexion</a>
		</li>
		<?php } else { ?>
		<li class="nav-item">
		<a class="nav-link js-scroll-trigger" href="register.php">S'inscrire</a>
		</li>
		<li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="login.php">Se connecter</a>
		</li>
	</ul>
<?php } ?>
	</div>
  </div>
</nav>
</html>
