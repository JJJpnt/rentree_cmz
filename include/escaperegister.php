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

if($password == $verifpassword) {
    if($mail1 == $verifmail1 && $mail2 == $verifmail2) {

        $teamnameexist = $bdd->prepare("SELECT team_name FROM RDEEscaperegister WHERE team_name = '$teamname'");
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


            $escaperegistration = $bdd->prepare("INSERT INTO RDEEscaperegister (team_name, establishment, password_manif)
                                                VALUES ( :team_name, :establishment, :password_manif)");

            $escaperegistration->execute(array(
            ':team_name' => $teamname,
            ':establishment' => $establishment,
            ':password_manif' => $password
            ));
            $escaperegistration->closeCursor();

            $escaperelation1 = $bdd->prepare("INSERT INTO RDEEscaperelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $escaperelation1->execute(array(
            ':participant_id' => $idpart1,
            ':name_team' => $teamname
            ));
            $escaperelation1->closeCursor();

            $escaperelation2 = $bdd->prepare("INSERT INTO RDEEscaperelation (participant_id, name_team)
                                                VALUES ( :participant_id, :name_team)");

            $escaperelation2->execute(array(
            ':participant_id' => $idpart1,
            ':name_team' => $teamname
            ));
            $escaperelation2->closeCursor();

        }
    } else {
        echo "Sur la page : Au moins un des mails n'a pas été entré ou confirmé correctement.";
}} else {
    echo "Sur la page : Les deux mots de passe ne correspondent pas";
}
?>