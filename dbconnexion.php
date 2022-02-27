<?php 

           try{
                  
                  $con = new PDO("mysql:host=localhost;dbname=teste1;port=3306;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	       }catch (PDOException $e) {
	 	          echo 'Erreur de connexion: '.$e->getMessage();
	       }
?>