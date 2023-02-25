<h6> Les cours d'art </h6>
<h7> Les cours du Lundi sont consacrer à l'art sur sculpture </h7>
<h7> Le Mardi ainsi que le Mercredi sont des cours de peinture sur toile </h7>
<h7> Le Jeudi est consacrer à l'apprentissage du dessin de portrait </h7>
<h7> Le Vendredi et le Samedi sont utilisés pour l'art de thème </h7>
<h6> Les cours d'art disponibles </h6>
<p> peut-être un ul suivi d'un foreach avec bouton pour reserver (meme principe que le mode admin) </p>
<ul>
<?php foreach($content as $info) : ?>
    <li>
        <a href="index.php?action=reserver&id=<?=$info->getId()?>"> <?=$info->getJour()?><?=$info->getHeure()?> </a>
    </li>
<?php endforeach; ?>
</ul>
