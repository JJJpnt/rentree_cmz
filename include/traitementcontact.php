<?php 

$nom = !empty($_POST['name']) ? $_POST['name'] : NULL;
$prenom = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$etablissement = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$objet = !empty($_POST['objet']) ? $_POST['objet'] : NULL;
$msg = !empty($_POST['message']) ? $_POST['message'] : NULL;
$destinataire = "valentin_mg08@hotmail.fr";
$message = "Nom : $nom \rPrénom : $prenom \rEtablissement : $etablissement \rAdresse mail : $mail \rTéléphone : $tel \r\rMessage : \r$msg";

    mail($destinataire, $objet, $message);
    header('Location: ../contact.php?success=1');
?>