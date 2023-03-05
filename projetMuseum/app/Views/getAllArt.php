<!-- Page 1 -->
<section class="LandingPage">
    <h1> <span id="texteImage1">BIENVENUE</span> DANS MUSEUM </h1>
    <a href="#explorerIci" class="boutonExplorer"> Explorer </a>
    <div class="flecheTexte">
        <p> Explorer </p>
        <img class="fleche" src="../img/fleche.PNG" alt="fleche">
    </div>
</section>
<!-- Page 2 -->
<section class="MuseumPresentation">
    <div id="explorerIci">
        <div class="Page2">
            <div class="partieTexteGauche">
                <h2> <span class="longtiret">——</span> MUSEUM </h2>
                <p> Bienvenue dans Museum, notre musée d'art. Découvrer, admirer et rensenter le sens de l'art via la collection de nombreuses oeuvres que nous vous proposons à ce jour. Par la suite, vous pourrez aller voir ces oeuvres ainsi que leurs histoires. </p>
            </div>
            <div class="imgStatue1">
                <img class="Statue1" src="../img/statue.png">
            </div>
        </div>
    </div>
</section>
<!-- Page 3 -->
<section class="MuseumArtiste">
    <div class="Page3">
        <div class="imgStatue2">
            <img class="Statue2" src="../img/statue2.png">
        </div>
        <div class="partieTexteDroite">
            <h2> ARTISTE <span class="longtiret">——</span> </h2>
            <p> A travers cette expérience unique, vous allez découvrir les oeuvres de Vincent Van Gogh, Léonard De Vinci ainsi que de Claude Monet. Ces 9 oeuvres sont celle qui on marqué l'histoire de notre planète. </p>
            <a href="#oeuvreAffiche" class="boutonDecouvrir"> Découvrir </a>
        </div>
    </div>
</section>
<!-- Page 4 -->
<section class="oeuvre">
    <div id="oeuvreAffiche">
        <!-- div où les oeuvres sont afficher -->
        <div class="container">
        <?php foreach($content as $info) : ?>
            <div class="DansLaBoucle">
                <a href="index.php?action=details&id=<?=$info->getId()?>"><img src="<?=$info->getUrl()?>"> </a>
                <p><?=$info->getNom_peinture()?></p>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>