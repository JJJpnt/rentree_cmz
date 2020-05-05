<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Rentrée des étudiants - CMZ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    
  </head>
  <body>
    <?php include('include/nav.php')?>

    <div class="headercontact">
        <img src="img/contactbanner.png" class="img-fluid">
    </div>

        <section class="get-in-touch">
            <?php

            if(isset($_GET['success'])) {
                if($_GET['success'] == 1) { ?>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7">
                        <div class="alert alert-danger text-center" role="alert">
                            Votre mail a bien été envoyé.
                        </div>
                    </div>
                </div>
                <?php }
            }

            ?>
            <h1 class="title">Contactez-nous</h1>
            <form class="contact-form row justify-content-center" action="include/traitementcontact.php" method="post">
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="name" autofocus tabindex="1" required>
                    <label class="label">Nom</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="firstname" tabindex="2" required>
                    <label class="label">Prénom</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="etablissement" tabindex="3" required>
                    <label class="label">Etablissement</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="mail" tabindex="4" required>
                    <label class="label">Mail</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="tel" tabindex="5" required>
                    <label class="label">Telephone</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="objet" tabindex="6" required>
                    <label class="label">Objet de la demande ou observation</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="message" tabindex="7" required>
                    <label class="label">Message</label>
                </div>
                <div class="form-field col-12">
                    <center><button class="submit-btn" type="submit" value="submit">Envoyer</button></center>
                </div>
            </form>
        </section>

    <div class="contactfontawesome">
        <h2 class="text-center policetitres mt-2">Ou alors</h2>
        <div class="row">
            <div class="col-4 mx-auto text-center">
                <i class="fas fa-phone fa-2x"></i>
            </div>
            <div class="col-4 mx-auto text-center">
                <i class="fas fa-map-marked-alt fa-2x"></i>
            </div>
            <div class="col-4 mx-auto text-center">
                <i class="fas fa-envelope fa-2x"></i>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4 mx-auto text-center">
                <p class="policep">03 24 32 44 91</p>
            </div>
            <div class="col-4 mx-auto text-center">
                <p class="policep">Place du Théâtre<br>CS 40490<br>08109 Charleville-Mézières Cedex</p>
            </div>
            <div class="col-4 mx-auto text-center">
                <p class="policep">etudiants@mairie-charlevillemezieres.fr</p>
            </div>
        </div>
    </div>



    <div class="nospartenaires bg-azur-light">
        <h2 class="policetitres text-center">Nos partenaires</h2>
        <div class="grid">
            <div class="grid-item"><img src="img/event_2019/1.jfif"></div>
            <div class="grid-item grid-item--width2"><img src="img/event_2019/2.jfif"></div>
            <div class="grid-item"><img src="img/event_2019/3.jfif"></div>
            <div class="grid-item"><img src="img/event_2019/4.jfif"></div>
            <div class="grid-item grid-item--width2"><img src="img/event_2019/5.jfif"></div>
            <div class="grid-item"><img src="img/event_2019/6.jfif"></div>
        </div>
    </div>




    <!-- Page d'acceuil content end -->

    <?php include('include/footer.php')?>

    <!-- Masonry -->
    <!-- <script src="assets/masonry.pkgd.min.js"></script> -->

    <script>
    $(function(){
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 200,
            gutter: 20
        });

    });
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>