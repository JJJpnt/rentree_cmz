<?php 

$nom = !empty($_POST['name']) ? $_POST['name'] : "Le message est vide";
$prenom = !empty($_POST['firstname']) ? $_POST['firstname'] : "Le message est vide";
$etablissement = !empty($_POST['etablissement']) ? $_POST['etablissement'] : "Le message est vide";
$mail = !empty($_POST['mail']) ? $_POST['mail'] : "Le message est vide";
$tel = !empty($_POST['tel']) ? $_POST['tel'] : "Le message est vide";
$objet = !empty($_POST['objet']) ? $_POST['objet'] : "Le message est vide";
$msg = !empty($_POST['message']) ? $_POST['message'] : "Le message est vide";
$destinataire = "valentin_mg08@hotmail.fr";
$message = "Nom : $nom \rPrénom : $prenom \rEtablissement : $etablissement \rAdresse mail : $mail \rTéléphone : $tel \r\rMessage : \r$msg";

    mail($destinataire, $objet, $message);
?>