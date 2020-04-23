<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Pique-Nique</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <img class="rdeimg" src="img/event_2019/1.jfif">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>

</html>