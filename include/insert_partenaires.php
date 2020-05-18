<?php 
include ('connexiondbval.php');

  $image = !empty($_POST['image']) ? $_POST['image'] : NULL;
  $website_link = !empty($_POST['website_link']) ? $_POST['website_link'] : NULL;
  $alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;


  $sql = $bdd->prepare("INSERT INTO RDEPartners ( image, website_link, alt  )
  VALUES ( :image, :website_link, :alt )");

$sql->execute(array(
":image" => $image,
":website_link" => $website_link,
":alt" => $alt
));

?>