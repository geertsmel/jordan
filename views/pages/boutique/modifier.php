<h2>Modifier un article</h2>
<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $basket["basket_id"]?>">
    <div class="row p-5">
        <label for="image">URL Image : </label>
        <input type="text" name="image" id="image" value="<?= $basket["image"]?>">
    </div>
    <div class="row p-5">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" value="<?= $basket["nom"]?>">
    </div>
    <div class="row p-5">
        <label for="prix">Prix : </label>
        <input type="number" name="prix" id="prix" step="0.01" min="0" value="<?= $basket["prix"]?>">
    </div>
    <div class="row p-5">
        <label for="matiere">Matière : </label>
        <input type="text" name="matiere" id="matiere" value="<?= $basket["matiere"]?>">
    </div>
    <div class="row p-5">
        <label for="public">Public : </label>
        <select name="public" id="public">
            <?php foreach($tabPublic as $key => $value): ?>
    <option value="<?= $key?>" 
    <?php 
        if($key == $basket["public"]){
            echo "selected";
        }
    ?>
    ><?= $value ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="row p-5">
        <label for="couleur">Couleur : </label>
        <input type="text" name="couleur" id="couleur" value="<?= $basket["couleur"]?>">
    </div>
    <div class="row p-5">
        <label for="modele">Modèle : </label>
        <select name="modele" id="modele">
            <?php foreach($tabModele as $value): ?>
    <option value="<?= $value?>"
    <?php 
        if($value == $basket["modele"]){
            echo "selected";
        }
    ?>
    ><?= $value ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="row p-5">
        <label for="sport">Sport : </label>
        <select name="sport" id="sport">
            <?php foreach($tabSport as $value): ?>
    <option value="<?= $value?>"
    <?php 
        if($value == $basket["sport"]){
            echo "selected";
        }
    ?>
    ><?= $value ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="row p-5 jc-sa">
        <a href="?section=boutique" class="btn">Annuler</a>
        <input type="submit" 
        name="action"
        value="Modifier" class="btn">
    </div>
</form>
<script>
    boutique.classList.add("active");
</script>