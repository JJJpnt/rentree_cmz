<?php
include ('../../../include/connexiondbval.php');

$idgallery = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM RDEGallery WHERE id_image = $idgallery");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=gallerydeleted");

?>