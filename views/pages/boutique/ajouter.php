<h2>Ajouter un article</h2>
<form action="#" method="post">
    <input type="hidden" name="id" value="0">
    <div class="row p-5">
        <label for="image">URL Image : </label>
        <input type="text" name="image" id="image">
    </div>
    <div class="row p-5">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom">
    </div>
    <div class="row p-5">
        <label for="prix">Prix : </label>
        <input type="number" name="prix" id="prix" step="0.01" min="0">
    </div>
    <div class="row p-5">
        <label for="matiere">Matière : </label>
        <input type="text" name="matiere" id="matiere">
    </div>
    <div class="row p-5">
        <label for="public">Public : </label>
        <select name="public" id="public">
            <?php foreach($tabPublic as $key => $value): ?>
    <option value="<?= $key?>"><?= $value ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="row p-5">
        <label for="couleur">Couleur : </label>
        <input type="text" name="couleur" id="couleur">
    </div>
    <div class="row p-5">
        <label for="modele">Modèle : </label>
        <select name="modele" id="modele">
            <?php foreach($tabModele as $value): ?>
    <option value="<?= $value?>"><?= $value ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="row p-5">
        <label for="sport">Sport : </label>
        <select name="sport" id="sport">
            <?php foreach($tabSport as $value): ?>
    <option value="<?= $value?>"><?= $value ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="row p-5 jc-sa">
        <a href="?section=boutique" class="btn">Annuler</a>
        <input type="submit" name="action" value="Ajouter" class="btn">
    </div>
</form>
<script>
    boutique.classList.add("active");
</script>