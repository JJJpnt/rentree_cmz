<?php

include('connexiondbval.php');

$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;

$teamname = !empty($_POST['teamname']) ? $_POST['teamname'] : NULL;
$password = !empty($_POST['password']) ? $_POST['password'] : NULL;
$verifpassword = !empty($_POST['verifpassword']) ? $_POST['verifpassword'] : NULL;

$name1 = !empty($_POST['name1']) ? $_POST['name1'] : NULL;
$firstname1 = !empty($_POST['firstname1']) ? $_POST['firstname1'] : NULL;
$tel1 = !empty($_POST['tel1']) ? $_POST['tel1'] : NULL;
$mail1 = !empty($_POST['mail1']) ? $_POST['mail1'] : NULL;
$verifmail1 = !empty($_POST['verifmail1']) ? $_POST['verifmail1'] : NULL;

$name2 = !empty($_POST['name2']) ? $_POST['name2'] : NULL;
$firstname2 = !empty($_POST['firstname2']) ? $_POST['firstname2'] : NULL;
$tel2 = !empty($_POST['tel2']) ? $_POST['tel2'] : NULL;
$mail2 = !empty($_POST['mail2']) ? $_POST['mail2'] : NULL;
$verifmail2 = !empty($_POST['verifmail2']) ? $_POST['verifmail2'] : NULL;

$name3 = !empty($_POST['name3']) ? $_POST['name3'] : NULL;
$firstname3 = !empty($_POST['firstname3']) ? $_POST['firstname3'] : NULL;
$tel3 = !empty($_POST['tel3']) ? $_POST['tel3'] : NULL;
$mail3 = !empty($_POST['mail3']) ? $_POST['mail3'] : NULL;
$verifmail3 = !empty($_POST['verifmail3']) ? $_POST['verifmail3'] : NULL;

$name4 = !empty($_POST['name4']) ? $_POST['name4'] : NULL;
$firstname4 = !empty($_POST['firstname4']) ? $_POST['firstname4'] : NULL;
$tel4 = !empty($_POST['tel4']) ? $_POST['tel4'] : NULL;
$mail4 = !empty($_POST['mail4']) ? $_POST['mail4'] : NULL;
$verifmail4 = !empty($_POST['verifmail4']) ? $_POST['verifmail4'] : NULL;

$name5 = !empty($_POST['name5']) ? $_POST['name5'] : NULL;
$firstname5 = !empty($_POST['firstname5']) ? $_POST['firstname5'] : NULL;
$tel5 = !empty($_POST['tel5']) ? $_POST['tel5'] : NULL;
$mail5 = !empty($_POST['mail5']) ? $_POST['mail5'] : NULL;
$verifmail5 = !empty($_POST['verifmail5']) ? $_POST['verifmail5'] : NULL;


if($password == $verifpassword) {
    if($mail1 == $verifmail1 && $mail2 == $verifmail2 && $mail3 == $verifmail3 && $mail4 == $verifmail4 && $mail5 == $verifmail5) {

        $teamnameexist = $bdd->prepare("SELECT team_name FROM RDEExpressregister WHERE team_name = '$teamname'");
        $teamnameexist->execute();

        $count = $teamnameexist->rowCount();
        if($count>0) {
                echo "nom d'équipe déjà pris";
            } else {
        
            $part1 = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part1->execute(array(
                ':name' => $name1,
                ':first_name' => $firstname1,
                ':phone' => $tel1,
                ':mail' => $mail1
            ));
            $part1->closeCursor();
            $idpart1 = $bdd->lastInsertId();

            $part2 = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part2->execute(array(
                ':name' => $name2,
                ':first_name' => $firstname2,
                ':phone' => $tel2,
                ':mail' => $mail2
            ));
            $part2->closeCursor();
            $idpart2 = $bdd->lastInsertId();

            $part3 = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part3->execute(array(
                ':name' => $name3,
                ':first_name' => $firstname3,
                ':phone' => $tel3,
                ':mail' => $mail3
            ));
            $part3->closeCursor();
            $idpart3 = $bdd->lastInsertId();

            $part4 = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part4->execute(array(
                ':name' => $name4,
                ':first_name' => $firstname4,
                ':phone' => $tel4,
                ':mail' => $mail4
            ));
            $part4->closeCursor();
            $idpart4 = $bdd->lastInsertId();

            $part5 = $bdd->prepare("INSERT INTO RDEParticipants (name, first_name, phone, mail)
                                    VALUES ( :name, :first_name, :phone, :mail)");

            $part5->execute(array(
                ':name' => $name5,
                ':first_name' => $firstname5,
                ':phone' => $tel5,
                ':mail' => $mail5
            ));
            $part5->closeCursor();
            $idpart5 = $bdd->lastInsertId();

            $basketregistration = $bdd->prepare("INSERT INTO RDEExpressregister (team_name, establishment, password_manif)
                                                VALUES ( :team_name, :establishment, :password_manif)");

            $basketregistration->execute(array(
            ':team_name' => $teamname,
            ':establishment' => $establishment,
            ':password_manif' => $password
            ));
            $basketregistration->closeCursor();

            $basketrelation1 = $bdd->prepare("INSERT INTO RDEExpressrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation1->execute(array(
            ':participant_id' => $idpart1,
            ':name_team' => $teamname
            ));
            $basketrelation1->closeCursor();

            $basketrelation2 = $bdd->prepare("INSERT INTO RDEExpressrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation2->execute(array(
            ':participant_id' => $idpart2,
            ':name_team' => $teamname
            ));
            $basketrelation2->closeCursor();

            $basketrelation3 = $bdd->prepare("INSERT INTO RDEExpressrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation3->execute(array(
            ':participant_id' => $idpart3,
            ':name_team' => $teamname
            ));
            $basketrelation3->closeCursor();

            $basketrelation4 = $bdd->prepare("INSERT INTO RDEExpressrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation4->execute(array(
            ':participant_id' => $idpart4,
            ':name_team' => $teamname
            ));
            $basketrelation4->closeCursor();

            $basketrelation5 = $bdd->prepare("INSERT INTO RDEExpressrelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $basketrelation5->execute(array(
            ':participant_id' => $idpart5,
            ':name_team' => $teamname
            ));
            $basketrelation5->closeCursor();

        }} else {
        echo "Sur la page : Au moins un des mails n'a pas été entré ou confirmé correctement.";
    }
}
else {
    echo "Sur la page : Les deux mots de passe ne correspondent pas";
}
?>