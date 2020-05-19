<?php
include ('../../../include/connexiondbval.php');

$image_link = !empty($_POST['image_link']) ? $_POST['image_link'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$category = !empty($_POST['category']) ? $_POST['category'] : NULL;

$newimage = $bdd->prepare("INSERT INTO RDEGallery (image_link, alt, category)
                                  VALUES ( :image_link, :alt, :category)");

$newimage->execute(array(
    ':image_link' => $image_link,
    ':alt' => $alt,
    ':category' => $category
));
$newimage->closeCursor();

header("Location: ../../admin.php?success=galleryadd");

?>