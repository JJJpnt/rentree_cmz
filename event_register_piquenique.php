<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Pique-Nique</title>
</head>

<body>


  <?php include('include/nav.php')?>
  <!-- Evenement register content -->


  <!-- Image header -->
  <div><img class="event_img" src="img/caroloexpress.png"></div>

  <!-- Second Row -->
  <div id="evenements" class="container-fluid">
    <div class="row">
      <div class="col-6 my-auto">
        <h2 class="text-center policetitres">Pique-Nique</h2>
        <p class="policep">Merci de remplir les champs ci-dessous pour reserver votre repas
à la plaine du Mont Olympe pour le prix de 3€ au lieu de 5€
pour les 200 premières réservations.</p>
      </div>
      <div class="col-6">
        <img class="rdeimg" src="img/imgetudiantspiscine.jpg">
      </div>
    </div>
  </div>

  <!-- Formumaire -->

  <!-- Parrallaxe -->
  <?php include('include/parallax.php')?>

  <!-- Event Cards -->
  <div class="row my-4 mx-auto">
  <div class="col-6 col-md-4 mb-2">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Carolo Express</h5>
          
          <center><a href="event_register_caroloexpress.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-2">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Carolo Warrior</h5>
          
          <center><a href="event_register_carolowarrior.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-2">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Concours de cuisine</h5>
          
          <center><a href="event_register_concourscuisine.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
  </div>

  <!-- Event register content end -->
  <?php include('include/footer.php')?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>