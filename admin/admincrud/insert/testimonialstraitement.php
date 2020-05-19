<?php
include ('../../../include/connexiondbval.php');

$first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$age = !empty($_POST['age']) ? $_POST['age'] : NULL;
$establishment = !empty($_POST['establishment']) ? $_POST['establishment'] : NULL;
$text = !empty($_POST['text']) ? $_POST['text'] : NULL;
$image = !empty($_POST['image']) ? $_POST['image'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;

$newtestimonial = $bdd->prepare("INSERT INTO RDETestimonials (first_name, age, establishment, text, image, alt)
                                  VALUES ( :first_name, :age, :establishment, :text, :image, :alt)");

$newtestimonial->execute(array(
    ':first_name' => $first_name,
    ':age' => $age,
    ':establishment' => $establishment,
    ':text' => $text,
    ':image' => $image,
    ':alt' => $alt,
));
$newtestimonial->closeCursor();

header("Location: ../../admin.php?success=testimonialadd");

?>