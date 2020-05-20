<?php
include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;



if($mail == $verifmail) {

    $balregistration = $bdd->prepare("INSERT INTO RDEPiqueniquetregister (name, first_name, phone, mail, establishment )
                                      VALUES (:name, :first_name, :phone, :mail, :establishment)");

    $balregistration->execute(array(
    ':name' => $name,
    ':first_name' => $firstname,
    ':phone' => $tel,
    ':mail' => $mail,
    ':establishment' => $establishment
    ));
    $balregistration->closeCursor();
}

else {
    echo "Quand le form sera en ajax, ici mettre une alerte : les deux mails ne sont pas les mêmes";
}

?>