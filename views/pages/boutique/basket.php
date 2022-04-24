
<h2><?= $basket["nom"] ?> </h2>
<div class="row jc-sb p-5">
    <span><?= $basket["prix"] ?> €</span>
<?php if(isset($_SESSION["user"])): ?>
    
        <a href="?section=gerer&action=modifier&id=<?= $basket["basket_id"] ?>" class="btn">Modifier</a>
        <a href="?section=gerer&action=supprimer&id=<?= $basket["basket_id"] ?>" class="btn">Supprimer</a>
    
<?php endif; ?>

</div>
<img width="100%" src="<?= $basket["image"] ?>" alt="Photo de <?= $basket["nom"] ?>">
<dl>
    <dt>Matière :</dt>
    <dd><?= $basket["matiere"] ?></dd>
</dl>
<dl>
    <dt>Sexe :</dt>
    <dd><?= $tabPublic[$basket["public"]] ?> </dd>
</dl>
<dl>
    <dt>Couleur :</dt>
    <dd><?= str_replace(" ", ", ", $basket["couleur"]) ?> </dd>
</dl>
<dl>
    <dt>Modèle :</dt>
    <dd><?= $basket["modele"] ?> </dd>
</dl>

<dl>
    <dt>Sport :</dt>
    <dd><?= $basket["sport"] ?> </dd>
</dl>

<script>
    boutique.classList.add("active");
</script>