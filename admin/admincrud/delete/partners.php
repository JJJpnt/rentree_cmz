<?php
include ('../../../include/connexiondbval.php');

$idpartner = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM RDEPartners WHERE id_partner = $idpartner");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=partnerdeleted");

?>