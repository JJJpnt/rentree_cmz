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
</head>

<body class="bg-light">
    
<h1 class="text-center font-weight-light font-italic text-black-50 mt-4 mb-5">Bienvenue dans votre interface Administrateur</h1>
    <center><a href="../index.php" class="text-black-50 mb-5">Revenir à l'accueil</a></center>
    <center><a href="inscriptions.php" class="text-black-50 mt-5 mb-5">Accès aux inscriptions</a></center>
    <div class="container mt-2">
        <?php if(isset($_GET['success'])){
                if($_GET['success'] == 'testimonialadd') {?>
                    <div class="alert alert-secondary" role="alert">
                    Vous venez d'ajouter un témoignage.
                    </div>
        <?php } elseif($_GET['success'] == 'testimonialdeleted') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Témoignage supprimé.
                    </div>
        <?php } elseif($_GET['success'] == 'testimonialupdated') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Témoignage modifié.
                    </div>
        <?php } elseif($_GET['success'] == 'partneradd') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Vous venez d'ajouter un partenaire.
                    </div>
        <?php } elseif($_GET['success'] == 'partnerdeleted') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Partenaire supprimé.
                    </div>
        <?php } elseif($_GET['success'] == 'partnerupdated') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Partenaire modifié.
                    </div>
        <?php } elseif($_GET['success'] == 'galleryadd') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Photo ajoutée à la galerie photo.
                    </div>
        <?php } elseif($_GET['success'] == 'gallerydeleted') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Photo supprimée de la galerie photo.
                    </div>
        <?php } elseif($_GET['success'] == 'galleryupdated') { ?>
                    <div class="alert alert-secondary" role="alert">
                    Photo modifiée dans la galerie photo.
                    </div>
        <?php }} ?>
    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Témoignages</center></h3>

    <center><a href="admincrud/insert/testimonials.php" class="text-black-50">Ajouter un témoignage <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Prénom</th>
          <th scope="col">Age</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Texte</th>
          <th scope="col">Photo</th>
          <th scope="col">Brève description de la photo</th>
          <!-- <th scope="col">Modifier</th> -->
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $readtestimonials = $bdd->prepare("SELECT * FROM RDETestimonials");
            $readtestimonials->execute();

            while ($donnees = $readtestimonials->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['first_name']; ?></th>
          <td><?= $donnees['age']; ?></td>
          <td><?= $donnees['establishment']; ?></td>
          <td><?= substr($donnees['text'], 0, 60); ?>...</td>
          <td><img src="../img/<?= $donnees['image']; ?>" style="width:5em; height:auto;"></td>
          <td><?= $donnees['alt']; ?></td>

          <!-- <td><a href="admincrud/update/testimonials.php?id= $donnees['id_testimonial'];" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td> -->
          <td><a href="admincrud/delete/testimonials.php?id=<?= $donnees['id_testimonial'];?>" class="text-muted"><i
                class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$readtestimonials->closecursor();
?>
      </tbody>
    </table>
  </div>

  <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Partenaires</center></h3>

  <center><a href="admincrud/insert/partners.php" class="text-black-50">Ajouter un partenaire <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Photo</th>
          <th scope="col">Brève description de la photo</th>
          <th scope="col">Lien du site</th>
          <!-- <th scope="col">Modifier</th> -->
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $readpartners = $bdd->prepare("SELECT * FROM RDEPartners");
            $readpartners->execute();

            while ($donnees = $readpartners->fetch())
        { ?>
        <tr>
        <td><img src="../img/<?= $donnees['image']; ?>" style="width:5em; height:auto;"></td>
          <td><?= $donnees['alt']; ?></td>
          <td><?= $donnees['website_link']; ?></td>
          <!-- <td><a href="admincrud/update/partners.php?id= $donnees['id_partner'];" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td> -->
          <td><a href="admincrud/delete/partners.php?id=<?= $donnees['id_partner'];?>" class="text-muted"><i
                class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$readtestimonials->closecursor();
?>
      </tbody>
    </table>
  </div>

  <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Galerie photos</center></h3>

  <center><a href="admincrud/insert/gallery.php" class="text-black-50">Ajouter une photo à la galerie <i class="fas fa-plus-circle mb-4"></i></a></center>

    <div class="container mt-2">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Catégorie</th>
          <th scope="col">Photo</th>
          <th scope="col">Brève description de la photo</th>
          <!-- <th scope="col">Modifier</th> -->
          <th scope="col">Supprimer</th>
        </tr>
      </thead>
      <tbody>


        <?php
            $readgallery = $bdd->prepare("SELECT * FROM RDEGallery");
            $readgallery->execute();

            while ($donnees = $readgallery->fetch())
        { ?>
        <tr>
          <th scope="row"><?= $donnees['category']; ?></th>
          <td><img src="../img/<?= $donnees['image_link']; ?>" style="width:5em; height:auto;"></td>
          <td><?= $donnees['alt']; ?></td>
          <!-- <td><a href="admincrud/update/gallery.php?id= //$donnees['id_image'];" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td> -->
          <td><a href="admincrud/delete/gallery.php?id=<?= $donnees['id_image'];?>" class="text-muted"><i
                class="fas fa-trash-alt"></i></a></td>
        </tr>
        <?php
}
$readgallery->closecursor();
?>
      </tbody>
    </table>
  </div>

</body>
</html>