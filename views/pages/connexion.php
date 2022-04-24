<h2>Connexion</h2>
<form action="#" method="post">
    <div class="row p-5">
        <label for="login">Login :</label>
        <input type="text" name="login" id="login">
    </div>
    
    <div class="row p-5">
        <label for="mdp">Mot de passe :</label>
        <input type="text" name="mdp" id="mdp">
    </div>
    <div class="row p-5">
        <input type="submit" value="Connexion" class="btn">
    </div>
    
</form>
<?= $msg ?> 

<script>
    connexion.classList.add("active");
</script>