<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">    

    <title>Rentrée des étudiants - CMZ</title>
  </head>
  <body>

    
    <?php include('include/nav.php')?>
    <!-- Evenement register content -->
    
    <div class="container-fluid">

    <!-- Image header -->
    <div class="row bg-blue-light height-big my-auto text-white text-center">
      Image Header
    </div>

    <!-- Second Row -->
    <div class="row height-mid">
      <div class="col-6 bg-yellow-light">
        Info
      </div>
      <div class="col-6 bg-azur-light">
        Image
      </div>
    </div>

    <!-- Formumaire -->
    <div class="row height-big">
      Formulaire
    </div>

    <!-- Parrallaxe -->
    <?php include('include/parrallax.php')?>

    <!-- Event Cards -->
    <div class="row my-4 mx-auto">
      <?php
      
      $items_nb = 32;

      for($i=0;$i<$items_nb;$i++) {
        echo'
        <div class="col-6 col-md-4 col-lg-3 mb-2">
        <div class="card mx-auto" style="width: 18rem;">
          <img class="card-img-top" src=".../100px180/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        </div>
        ';
      }

      ?>
    </div>
    
    <!-- Event register content end -->
    <?php include('include/footer.php')?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>