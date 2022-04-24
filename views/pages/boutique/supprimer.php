<h2>Etes-vous sûr(e) de vous supprimer ?</h2>
<p><?= $basket["nom"] ?> </p>
<img src="<?= $basket["image"] ?>" alt="<?= $basket["nom"] ?>" width="100px">
<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $basket["basket_id"] ?>">
    <input type="hidden" name="nom" value="<?= $basket["nom"] ?>">
    <input type="hidden" name="image" value="<?= $basket["image"] ?>">
    <input type="hidden" name="prix" value="<?= $basket["prix"] ?>">
    <input type="hidden" name="matiere" value="<?= $basket["matiere"] ?>">
    <input type="hidden" name="public" value="<?= $basket["public"] ?>">
    <input type="hidden" name="couleur" value="<?= $basket["couleur"] ?>">
    <input type="hidden" name="modele" value="<?= $basket["modele"] ?>">
    <input type="hidden" name="sport" value="<?= $basket["sport"] ?>">
    <a href="?section=boutique" class="btn">Annuler</a>
    <input type="submit" name="action" value="Supprimer" class="btn">
</form>