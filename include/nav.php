<script type="text/javascript">
$(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(){
        st = $(this).scrollTop();
        // console.log(st);
        if((st <= 40)||(st < lastScrollTop)){
            // console.log("<40 or up");
            // $("body").removeClass("sticky-header");
            $("header").css("marginTop", 0 );
        }else{
            // console.log(">40 or down");
            $("header").css( "marginTop", ($("#header-top").height()*-0.666) );
            // $("body").addClass("sticky-header");
        }
        if(st >= 250){
            $("header").addClass("nav-opaque");
        }else{
            $("header").removeClass("nav-opaque");
        }

        lastScrollTop = st;
    });

    $(".filtersButton").click(function () {

        // $header = $(this);
        // //getting the next element
        // $content = $header.next();
        // //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        // $content.slideToggle(500, function () {
            //execute this after slideToggle is done
            //change text of header based on visibility of content div
            // $header.text(function () {
            //     //change text based on condition
            //     return $content.is(":visible") ? "Collapse" : "Expand";
            // });
        // });

        $("#filtersCollapse" ).toggleClass("filtersExpanded");

    });

});




</script>



    <header id="header-top" class="container-fluid navbar-container fixed-top d-flex align-items-center justify-content-between">
        <!-- <div id="header-top" class=" "> -->
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse order-4 order-lg-1 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link policetitres" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
  
      <div class="collapse navbar-collapse order-5 order-lg-2 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              RDE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="events_main.php">Activité A</a>
              <a class="dropdown-item" href="events_main.php">Activité B</a>
              <a class="dropdown-item" href="events_main.php">Activité C</a>
            </div>
          </li>
        </ul>
      </div>
  
      <div class="navbar-brand mx-auto order-2 order-lg-3 justify-content-center"><img class="logocmz-nav img-fluid" src="img/logocmz.svg"></div>
  
      <div class="collapse navbar-collapse order-6 order-lg-4 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Editions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="event.php">2020</a>
              <a class="dropdown-item" href="event_register.php">1979</a>
              <a class="dropdown-item" href="event.php">1515</a>
            </div>
          </li>
        </ul>
      </div>
  
      <div class="collapse navbar-collapse order-7 order-lg-5 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="faq.php">FAQ</a>
              <a class="dropdown-item" href="contact.php">Formulaire</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
    </header>





<!--

<div class="container-fluid navbar-container fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark justify-content-between">
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse order-4 order-lg-1 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link policetitres" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
  
      <div class="collapse navbar-collapse order-5 order-lg-2 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              RDE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="events_main.php">Activité A</a>
              <a class="dropdown-item" href="events_main.php">Activité B</a>
              <a class="dropdown-item" href="events_main.php">Activité C</a>
            </div>
          </li>
        </ul>
      </div>
  
      <div class="navbar-brand mx-auto order-2 order-lg-3 justify-content-center"><img class="logocmz-nav img-fluid" src="img/logocmz.svg"></div>
  
      <div class="collapse navbar-collapse order-6 order-lg-4 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Editions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="event.php">2020</a>
              <a class="dropdown-item" href="event_register.php">1979</a>
              <a class="dropdown-item" href="event.php">1515</a>
            </div>
          </li>
        </ul>
      </div>
  
      <div class="collapse navbar-collapse order-7 order-lg-5 justify-content-center" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="faq.php">FAQ</a>
              <a class="dropdown-item" href="contact.php">Formulaire</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
</div>

-->