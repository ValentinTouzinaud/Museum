<h1> Le musée d'oeuvres d'art</h1>
<h2> Bienvenue sur notre site web </h2>
<h3> Voici quelques tableaux disponible dans notre musé. Cliquer sur une des oeuvres d'art pour avoir plus d'informations sur celle-ci. Vous pouvez également réserver des cours d'arts via le bouton "Reservation" </h3>
<div class="container">
<?php foreach($content as $info) : ?>
    <div class="DansLaBoucle">
        <a href="index.php?action=details&id=<?=$info->getId()?>"><img src="<?=$info->getUrl()?>"> </a>
        <p><?=$info->getNom_peinture()?></p>
    </div>
<?php endforeach; ?>
</div>
