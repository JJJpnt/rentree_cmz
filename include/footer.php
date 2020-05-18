<?php include ('connexiondbval.php'); ?>

<Footer>
<p class="footertitle">Partenaires</p>
    <div class="mx-auto container_footer">
    <?php
        $req = $bdd->prepare(" SELECT * FROM RDEPartners");
        $req ->execute();

            while( $donnees = $req->fetch() ) { ?>

            <div>
                <a href="<?= $donnees['website_link']; ?>" target="_blank"><img src="<?= $donnees['image']; ?>" style="height:50px" class="hvr-pulse" alt="<?= $donnees['alt'] ?>" height="30px"></a>
            </div>
            <?php } ?>
        </div>

        <div class="copy">© Copyright 2020 JJ.Yoyo.Val.Antho</div>
</footer>


<!-- Footer 1 -->
<!-- <div class="container-fluid">
    <div class="row bg-yellow-light height-mid">
        <div class="col-12 col-blue-dark my-auto text-center">Footer 1</div>
    </div> -->

    <!-- Footer 2 -->
    <!-- <div class="row bg-azur-light height-small">
        <div class="col-12 col-blue-dark my-auto text-center">Footer 2</div>
    </div>
</div> -->
