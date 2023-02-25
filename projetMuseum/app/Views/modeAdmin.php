<h6> Modification des profils </h6>
<ul>
<?php if(count($values) > 0): ?>
<?php foreach($values as $pseudo) : ?>
    <li> <?=$pseudo["nom"]?> <?=$pseudo["prenom"]?> <?=$pseudo["email"]?> <a href="index.php?action=admin&userToDelete=<?=$pseudo["id"]?>"> SUPPRIMER </a> </li>
<?php endforeach; ?>
<?php else: ?>
    <p> Aucun utilisateur </p>
<?php endif; ?>
</ul>
<h6> Modification des peintures </h6>
<ul>
<?php if(count($peintures) > 0): ?>
<?php foreach($peintures as $peinture) : ?>
    <li> <?=$peinture->getNom_peinture()?><a href="index.php?action=admin&peintureToDelete=<?=$peinture->getId()?>"> SUPPRIMER </a> </li>
<?php endforeach; ?>
<?php else: ?>
    <p> Aucune peinture </p>
<?php endif; ?>
</ul>
<a href="index.php?action=ajouterPeinture"> AJOUTER </a>
<h6> Modification des réservations </h6>
<ul>
<?php if(count($reservations) > 0): ?>
<?php foreach($reservations as $r) : ?>
    <li> <?=$r["nom"]?> <?=$r["prenom"]?> <?=$r["jour"]?> <?=$r["heure"]?> <a href="index.php?action=admin&id_client=<?=$r["id_client"]?>&id_reservation=<?=$r["id_reservation"]?>"> SUPPRIMER </a> </li>
<?php endforeach; ?>
<?php else: ?>
    <p> Aucune réservation </p>
<?php endif; ?>
</ul>