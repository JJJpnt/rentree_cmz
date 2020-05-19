<?php
include ('../../../include/connexiondbval.php');

$image = !empty($_POST['image']) ? $_POST['image'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$website_link = !empty($_POST['website_link']) ? $_POST['website_link'] : NULL;

$newpartner = $bdd->prepare("INSERT INTO RDEPartners (image, alt, website_link)
                                  VALUES ( :image, :alt, :website_link)");

$newpartner->execute(array(
    ':image' => $image,
    ':alt' => $alt,
    ':website_link' => $website_link,
));
$newpartner->closeCursor();

header("Location: ../../admin.php?success=partneradd");

?>