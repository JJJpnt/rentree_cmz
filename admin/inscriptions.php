<?php
include('../include/connexiondbval.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="bg-light">

<h1 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Ici vous pourrez voir les inscriptions effectuées sur les différents évènements</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="admin.php" class="text-black-50 mt-5 mb-5">Retour dans l'interface Administrateur</a></center>

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <ul class="nav nav-tabs" id="register" role="tablist">
                <li class="nav-item mr-2">
                    <a class="nav-link active" data-toggle="tab" href="#express" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Carolo Express</p></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#warrior" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Carolo Warrior</p></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#cuisine" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Concours de Cuisine</p></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#piquenique" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Pique-Nique</p></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#basket" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Tournoi de Basket</p></a>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link" data-toggle="tab" href="#bal" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Bal de la rentrée</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#escape" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Escape Game</p></a>
                </li>
            </ul>
        </div>
    </div>


    <div class="mb-5"></div>
        <div class="row justify-content-center">
            <div class="tab-content" id="myTabContent">

                <!-- Express -->

<div class="tab-pane fade show active container mt-2" id="express" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Mot de passe</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $req = $bdd->prepare("SELECT * FROM RDEExpressregister, RDEExpressrelation, RDEParticipants WHERE RDEExpressrelation.participant_id = RDEParticipants.id_participant AND RDEExpressrelation.name_team = RDEExpressregister.team_name");
            $req->execute();

            while ($donnees = $req->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['password_manif']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req->closecursor();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Warrior -->

  <div class="tab-pane fade show container mt-2" id="warrior" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Mot de passe</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req2 = $bdd->prepare("SELECT * FROM RDEWarriorregister, RDEWarriorrelation, RDEParticipants WHERE RDEWarriorrelation.participant_id = RDEParticipants.id_participant AND RDEWarriorrelation.name_team = RDEWarriorregister.team_name");
            $req2->execute();

            while ($donnees = $req2->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['password_manif']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req2->closecursor();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Cuisine -->

  <div class="tab-pane fade show container mt-2" id="cuisine" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Mot de passe</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req3 = $bdd->prepare("SELECT * FROM RDECuisineregister, RDECuisinerelation, RDEParticipants WHERE RDECuisinerelation.participant_id = RDEParticipants.id_participant AND RDECuisinerelation.name_team = RDECuisineregister.team_name");
            $req3->execute();

            while ($donnees = $req3->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['password_manif']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req3->closecursor();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Pique-nique -->

  <div class="tab-pane fade show container mt-2" id="piquenique" role="tabpanel" aria-labelledby="register1-tab">
        <?php
            $req4 = $bdd->prepare("SELECT * FROM RDEPiqueniquetregister");
            $req4->execute(); 
            $placescount = $req4->rowCount();
            $placesrestantes = 200 - $placescount;?>

  <h6 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Il reste <?= $placesrestantes ?> repas à 3€ (<?= $placescount ?> inscriptions)</h6>

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>



            <?php while ($donnees = $req4->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['establishment']; ?></th>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            }
            $req4->closecursor();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Basket -->

  <div class="tab-pane fade show container mt-2" id="basket" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Mot de passe</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req5 = $bdd->prepare("SELECT * FROM RDEBasketregister, RDEBasketrelation, RDEParticipants WHERE RDEBasketrelation.participant_id = RDEParticipants.id_participant AND RDEBasketrelation.name_team = RDEBasketregister.team_name");
            $req5->execute();

            while ($donnees = $req5->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['password_manif']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req5->closecursor();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bal -->

  <div class="tab-pane fade show container mt-2" id="bal" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Etablissement</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $req6 = $bdd->prepare("SELECT * FROM RDEBalregister, RDEParticipants WHERE RDEBalregister.participant_id = RDEParticipants.id_participant");
            $req6->execute();

            while ($donnees = $req6->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['establishment']; ?></th>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            }
            $req6->closecursor();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Escape -->

  <div class="tab-pane fade show container mt-2" id="escape" role="tabpanel" aria-labelledby="register1-tab">
    <table class="table">
      <thead class="thead-light">
      <tr>
          <th scope="col">Nom de l'équipe</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Mot de passe</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mail</th>
        </tr>
      </thead>
      <tbody>


      <?php
            $req7 = $bdd->prepare("SELECT * FROM RDEEscaperegister, RDEEscaperelation, RDEParticipants WHERE RDEEscaperelation.participant_id = RDEParticipants.id_participant AND RDEEscaperelation.name_team = RDEEscaperegister.team_name");
            $req7->execute();

            while ($donnees = $req7->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['team_name']; ?></th>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= $donnees['password_manif']; ?></td>
          <td><?= $donnees['name']; ?></td>
          <td><?= $donnees['first_name']; ?></td>
          <td><?= $donnees['phone']; ?></td>
          <td><?= $donnees['mail']; ?></td>
        </tr>
        <?php
            } $req7->closecursor();
        ?>
      </tbody>
    </table>
  </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

</body>
</html>