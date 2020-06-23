<?php
include ('../../../include/connexiondbval.php');
$idpartner = $_GET['id'];

$image = !empty($_POST['image']) ? $_POST['image'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$website_link = !empty($_POST['website_link']) ? $_POST['website_link'] : NULL;

$req = $bdd->prepare(" UPDATE RDEPartners SET image = :image, alt = :alt, website_link = :website_link WHERE id_partner = $idpartner");
$req->execute(array(
    ':image' => $image,
    ':alt' => $alt,
    ':website_link' => $website_link
));
$req->closeCursor();

    header("Location: ../../admin.php?success=partnerupdated");
?>