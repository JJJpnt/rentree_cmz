<?php
include ('../../../include/connexiondbval.php');
$idtestimonial = $_GET['id'];

$first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : NULL;
$age = !empty($_POST['age']) ? $_POST['age'] : NULL;
$establishment = !empty($_POST['establishment']) ? $_POST['establishment'] : NULL;
$text = !empty($_POST['text']) ? $_POST['text'] : NULL;
$image = !empty($_POST['image']) ? $_POST['image'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;

$req = $bdd->prepare(" UPDATE RDETestimonials SET first_name = :first_name, age = :age, establishment = :establishment, text = :text, image = :image, alt = :alt WHERE id_testimonial = $idtestimonial");
$req->execute(array(
    ':first_name' => $first_name,
    ':age' => $age,
    ':establishment' => $establishment,
    ':text' => $text,
    ':image' => $image,
    ':alt' => $alt,
));

    header("Location: ../../admin.php?success=testimonialupdated");
?>