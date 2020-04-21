<!doctype html>
<html lang="en">

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
</head>

<body>

    <?php include('include/nav.php')?>

    <div class="headercontact">
        <img src="img/contactbanner.png" class="img-fluid">
    </div>

    <div class="contactform">
        <section class="get-in-touch">
            <h1 class="title">Contactez-nous</h1>
            <form class="contact-form row justify-content-center">
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" required>
                    <label class="label" for="name">Nom</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" required>
                    <label class="label" for="firstname">Prénom</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" required>
                    <label class="label" for="mail">Mail</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" required>
                    <label class="label" for="message">Message</label>
                </div>
                <div class="form-field col-12">
                    <center><input class="submit-btn" type="submit" value="Envoyer"></center>
                </div>
            </form>
        </section>
    </div>

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
    <script src="assets/masonry.pkgd.min.js"></script>

    <script>
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 200
        });
    </script>

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