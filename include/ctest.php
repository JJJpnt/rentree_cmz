<?php 

include ('connexiondbval.php');

$req = $bdd->prepare("SELECT * FROM RDETestimonials");
$req->execute();
$req->closeCursor();
echo "test réussi";

?>