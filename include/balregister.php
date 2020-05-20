<?php
include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;



if($mail == $verifmail) {
    $addparticipant = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                  VALUES ( :name, :first_name, :phone, :mail)");

    $addparticipant->execute(array(
        ':name' => $name,
        ':first_name' => $firstname,
        ':phone' => $tel,
        ':mail' => $mail
    ));
    $addparticipant->closeCursor();

    $participant_id = $bdd->lastInsertId();

    $balregistration = $bdd->prepare("INSERT INTO RDEBalregister (establishment, participant_id)
                                      VALUES ( :establishment, :participant_id)");

    $balregistration->execute(array(
    ':establishment' => $establishment,
    ':participant_id' => $participant_id
    ));
    $balregistration->closeCursor();

    // Le success passé dans l'url a retranscrire en ajax
    header('Location: ../event_register_bal.php?success=1');
}

else {
    echo "Quand le form sera en ajax, ici mettre une alerte : les deux mails ne sont pas les mêmes";

    // Requête d'affichage de mes données, si jamais j'en ai besoin c'est là

    // $req = $bdd->prepare("SELECT * FROM RDEBalregister, RDEParticipants WHERE RDEBalregister.participant_id = RDEParticipants.id_participant");
    // $req->execute();
    // while( $donnees = $req->fetch() ) {
    //     echo $donnees['id_registration'];
    //     echo $donnees['establishment'];
    //     echo $donnees['participant_id'];
    //     echo $donnees['id_participant'];
    //     echo $donnees['name'];
    //     echo $donnees['first_name'];
    //     echo $donnees['phone'];
    //     echo $donnees['mail'];
    // };
    // $req->closeCursor();
}

?>