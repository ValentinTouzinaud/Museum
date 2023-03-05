<section class="reservation">
    <h1> COURS D'ART </h1>
    <p> APPRENDRE L'ART ET SES TECHNIQUES </p>
    <div class="flecheTexte">
        <p> Explorer </p>
        <img class="fleche" src="../img/fleche.PNG" alt="fleche">
    </div>
</section>
<section class="horaireReserv">
    <div class="texteReserv">
        <h2> LES COURS D'ART </h2>
        <div class="espacementReserv"></div>
        <p> En notre musée, nous avons à disposition des enseignants d'art pour vous permettre d'apprendre d'avantage sur chacun des artistes ainsi que sur leurs techniques de peinture et autres. Les cours du Lundi sont consacrer à l'art sur sculpture. Pour les scéances du Mardi jusqu'au Samedi, les cours sont basées sur la peinture à thème. </p>
        <h2> RESERVATION </h2>
        <div class="espacementReserv"></div>
        <ul class="lesHoraires">
        <?php foreach($content as $info) : ?>
            <li>
                <a href="index.php?action=reserver&id=<?=$info->getId()?>"> <?=$info->getJour()?><?=$info->getHeure()?> </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</section>
