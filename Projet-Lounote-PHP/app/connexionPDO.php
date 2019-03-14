<?php
	try
    {
        // On se connecte à la base de donnée inscription avec le compte root (superadmin)
        $db= new PDO('mysql:host=localhost;dbname=lounote','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>
