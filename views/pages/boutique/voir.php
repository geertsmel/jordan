<h2>Boutique</h2>
<?php 
    if(isset($_SESSION["user"])):
?>
<div class="row p-5 jc-sa">
    <a href="?section=gerer&action=ajouter" class="btn">Ajouter</a>
</div>
<?php 
    endif;
?>
<div class="row p-5 jc-sa">
    <a href="?section=boutique" class="btn" id="tout">Tout</a>
    <a href="?section=boutique&filtrer&public=f" class="btn" id="femme">Femme</a>
    <a href="?section=boutique&filtrer&public=h" class="btn" id="homme">Homme</a>

</div>
<div class="row jc-sb">
    <?php foreach($baskets as $basket) : ?> 
    <div class="vignette">
        <a href="?section=basket&id=<?= $basket["basket_id"] ?>">
            <img src="<?= $basket["image"] ?>" alt="Photo de <?= $basket["nom"] ?>">
            <div class="p-5">
                <h3><?= $basket["nom"] ?> </h3>
                <p><?= $basket["prix"] ?> €</p>
            </div>
        </a>
        
    </div>
    <?php endforeach; ?> 
</div>
<script>
    boutique.classList.add("active");
    const url = window.location.search;
    const urlParams = new URLSearchParams(url);
    const aFiltre = urlParams.has("filtrer");
    if(!aFiltre){
        tout.classList.add("active");
    }
    else {
        if(urlParams.has("sexe")){
            if(urlParams.get("sexe") == "f"){
                femme.classList.add("active");
            }
            else if(urlParams.get("sexe") == "h"){
                homme.classList.add("active");
            }

        }
    }
    
</script>