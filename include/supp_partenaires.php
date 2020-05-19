<?php

   include ('connexiondbval.php');

    $req = $bdd->prepare(" DELETE FROM RDEPartners WHERE id_Partenaires ='".$_GET['id']."'");
    $req ->execute();
    
    header("location:crud.php");

?>