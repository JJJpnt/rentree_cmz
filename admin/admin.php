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
    <div class="container mt-2">
        <?php if(isset($_GET['success'])){
                if($_GET['success'] == '5') {?>
                    <div class="alert alert-secondary" role="alert">
                    L'article a bien été ajouté.
                    </div>
        <?php }} ?>
    <h3 class="font-weight-light text-black-50 mt-4 mb-5"><center>Témoignages</center></h3>

    <div class="container mt-2">
  <?php 
                if(isset($_GET['success'])){
                if($_GET['success'] == '1') {?>
                    <div class="alert alert-secondary" role="alert">
                    Les données de l'utilisateur viennent d'être modifiées.
                    </div>

                <?php
                } elseif($_GET['success'] == '2') {?>
                  <div class="alert alert-secondary" role="alert">
                  Vous venez de supprimer un utilisateur.
                  </div>
            <?php }} ?>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Prénom</th>
          <th scope="col">Age</th>
          <th scope="col">Etablissement</th>
          <th scope="col">Texte</th>
          <th scope="col">URL de la photo</th>
          <th scope="col">Description de la photo</th>
          <th scope="col">Modifier</th>
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
          <td><?= $donnees['image']; ?></td>
          <td><?= $donnees['alt']; ?></td>

          <td><a href="admincrud/update/testimonials.php?id=<?= $donnees['id_testimonial'];?>" class="text-muted"><i
                class="fas fa-user-edit"></i></a></td>
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

</body>
</html>