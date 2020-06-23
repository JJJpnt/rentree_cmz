<?php
include ('../../../include/connexiondbval.php');

$idtestimonial = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM RDETestimonials WHERE id_testimonial = $idtestimonial");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=testimonialdeleted");

?>