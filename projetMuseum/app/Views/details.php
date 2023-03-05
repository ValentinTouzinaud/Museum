<section class="PageDetail">
    <div class="DetailsImage">
        <img src="<?=$content->getUrl()?>">
    </div>
    <div class="espacementVertical"></div>
    <div class="detailTexte">
        <h1> <?=$content->getNom_peinture()?> </h1>
        <p> <?=$content->getDescription()?> </p>
        <a href="index.php" class="boutonAccueil"> Accueil </a>
    </div>
</section>