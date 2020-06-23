<?php
include ('../../../include/connexiondbval.php');
$idpartner = $_GET['id'];
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
</head>

<body class="bg-light">

<?php

$req = $bdd->prepare("SELECT * FROM RDEPartners WHERE id_partner = $idpartner");
$req->execute();


  while ($donnees = $req->fetch())
{

?>

    <h3 class="font-weight-light text-black-50 mt-4 mb-5">
        <center>Modifier le partenaire</center>
    </h3>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="partnerstraitement.php?id=<?= $idpartner ?>" method="post">
                    <div class="form-group">
                        <label>URL de la photo</label>
                        <input type="text" class="form-control" name="image" tabindex="1" required value="<?= $donnees['image'];?>">
                    </div>
                    <div class="form-group">
                        <label>Brève description de la photo</label>
                        <input type="text" class="form-control" name="alt" tabindex="2" required value="<?= $donnees['alt'];?>">
                    </div>
                    <div class="form-group">
                        <label>Lien du site du partenaire</label>
                        <input type="text" class="form-control" name="website_link" tabindex="3" required value="<?= $donnees['website_link'];?>">
                    </div>
                    <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Valider</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

<?php } ?>

</body>

</html>