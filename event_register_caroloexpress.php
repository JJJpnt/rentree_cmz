<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Carolo Express</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


  <script>
    var navCloud = true;
  </script>
  <?php include('include/nav.php')?>
  <!-- Evenement register content -->


  <!-- Image header -->
  <div><img class="event_img" src="img/caroloexpress.png"></div>

  <!-- Second Row -->
  <div id="evenements" class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6 my-auto">
        <h2 class="text-center policetitres">Le Carolo Express</h2>
        <p class="policep">Merci de remplir les champs ci-dessous pour inscrire votre équipe
          et participer au Carolo express (course d’orientation) qui pourra vous permettre
          de gagner de nombreux lots. Pour constituer une équipe, vous devez être 5 participants.
          Un mot de passe à choisir vous sera demandé pour l’équipe. Ce dernier vous sera utile
          le jour de la manifestation. Merci de bien retenir le mot de passe que vous allez choisir !
          Opérez votre inscription ensemble.</p>
      </div>
      <div class="col-12 col-md-6">
        <img class="rdeimg" src="img/event_2019/1.jfif">
      </div>
    </div>
  </div>

  <!-- Formumaire -->

  <section class="get-in-touch container-lg">
    <h1 class="title">Inscription Carolo Express</h1><br>
    <p class="policep text-center">Merci de remplir les champs ci-dessous pour inscrire votre équipe
      et participer au Carolo express (course d’orientation) qui pourra vous permettre
      de gagner de nombreux lots. Pour constituer une équipe, vous devez être 5 participants.
      Un mot de passe à choisir vous sera demandé pour l’équipe. Ce dernier vous sera utile
      le jour de la manifestation. Merci de bien retenir le mot de passe que vous allez choisir !
      Opérez votre inscription ensemble.</p><br>
    <h2 class="title2 mt-3">Etablissement</h2>
    <form class="contact-form row w-100 justify-content-center">
      <div class="form-field col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7">
        <center><select class="custom-select" name="etablissement" id="etablissement">
            <option value="IUTRCC">Institut Universitaire de Technologie (IUT RCC)</option>
            <option value="EiSINe">Ecole d’Ingénieurs en Sciences Industrielles et Numérique (EiSINe)</option>
            <option value="INSPE">Institut national Supérieur du Professorat et de l’Education (INSPÉ)</option>
            <option value="EGC">Ecole de gestion et de commerce (EGC)</option>
            <option value="SIMPLON">Ecole Simplon</option>
            <option value="ISCEE">Institut supérieur de comptabilité et d’économie des entreprises (ISCEE)</option>
            <option value="ESNAM">Ecole supérieure nationale des Arts de la marionnettes (ESNAM)</option>
            <option value="IFSI">Institut de formation en soins infirmiers (IFSI)</option>
            <option value="CFAI">Centre de formation des apprentis de l’industrie (CFAI)</option>
            <option value="LABDA">Lycée agricole Balcon des Ardennes</option>
            <option value="LDMDB">Lycée des métiers de Bazeilles</option>
            <option value="LMDS">Lycée Sévigné</option>
            <option value="LDMB">Lycée des métiers Bazin</option>
            <option value="LM">Lycée Monge</option>
            <option value="LJBC">Lycée JB Clément</option>
            <option value="LPB">Lycée Pierre Bayle</option>
            <option value="LSV">Lycée Simone Veil</option>
            <option value="SCBS">SCBS – Y Schools</option>
          </select></center>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-12 form-field">
          <h2 class="title2">Nom de l'équipe (à votre choix)</h2>
        </div>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="name" class="input-text js-input" name="teamname" type="text" required>
          <label class="label" for="name">Nom d'équipe</label>
        </div>
      </div>

      <h2 class="title2 mt-3">Merci de bien vouloir inscrire un mot de passe de votre choix qui vous sera nécessaire le jour de la manifestation</h2>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field mb-5">
          <input id="name" name="password" class="input-text js-input" type="password" required>
          <label class="label" for="name">Mot de passe</label>
        </div>
      </div>


      <div class="container-fluid mt-5">
        <div class="row justify-content-center">
          <ul class="nav nav-tabs" id="register" role="tablist">
            <li class="nav-item mr-2">
              <a class="nav-link active" id="part1" data-toggle="tab" href="#register1" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt">Participant 1</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part2" data-toggle="tab" href="#register2" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt">Participant 2</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part3" data-toggle="tab" href="#register3" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt">Participant 3</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part4" data-toggle="tab" href="#register4" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt">Participant 4</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="part5" data-toggle="tab" href="#register5" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt">Participant 5</p></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="mb-5"></div>
      <div class="row justify-content-center">
        <div class="tab-content" id="myTabContent">
          <!-- Tabs participants -->
            <div class="tab-pane fade show active" id="register1" role="tabpanel" aria-labelledby="register1-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 1</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="name" name="namepart1" class="input-text js-input" type="text" required>
                      <label class="label" for="name">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="firstnamepart1" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Prenom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="telpart1" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="mailpart1" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="verifmailpart1" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Retapez l'email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show" id="register2" role="tabpanel" aria-labelledby="register2-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3 text-center">Participant 2</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="name" name="namepart2" class="input-text js-input" type="text" required>
                      <label class="label" for="name">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="firstnamepart2" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Prenom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="telpart2" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="mailpart2" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="verifmailpart2" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Retapez l'email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show" id="register3" role="tabpanel" aria-labelledby="register3-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 3</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="name" name="namepart3" class="input-text js-input" type="text" required>
                      <label class="label" for="name">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="firstnamepart3" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Prenom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="telpart3" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="mailpart3" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="verifmailpart3" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Retapez l'email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="tab-pane fade show" id="register4" role="tabpanel" aria-labelledby="register4-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 4</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="name" name="namepart4" class="input-text js-input" type="text" required>
                      <label class="label" for="name">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="firstnamepart4" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Prenom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="telpart4" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="mailpart4" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="verifmailpart4" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Retapez l'email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show" id="register5" role="tabpanel" aria-labelledby="register5-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 5</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="name" name="namepart5" class="input-text js-input" type="text" required>
                      <label class="label" for="name">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="firstnamepart5" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Prenom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="telpart5" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="mailpart5" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input id="email" name="verifmailpart5" class="input-text js-input" type="email" required>
                      <label class="label" for="email">Retapez l'email</label>
                    </div>
                  </div>

                  <div class="form-field col-12">
                    <center><input class="submit-btn" type="submit" value="Valider"></center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- Parrallaxe -->
  <?php include('include/parallax.php')?>

  <!-- Event Cards -->
  <div class="row my-4 justify-content-center w-100">
    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Carolo Warrior</h5>

          <center><a href="event_register_carolowarrior.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Concours de cuisine</h5>

          <center><a href="event_register_concourscuisine.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Pique-nique</h5>

          <center><a href="event_register_piquenique.php" class="btn btn-primary">S'inscrire</a></center>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
  </script>
</body>

</html>