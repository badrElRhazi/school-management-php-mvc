<?php
$title="Ajouter  stagiaire";

ob_start();
        
?>
    <form action="store.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" class="form-control is-valid" name="nom" id="nom">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control is-valid" name="prenom" id="prenom">
        <label for="age">Age</label>
        <input type="text" class="form-control is-valid" name="age" id="age">
        <label for="login">Login</label>
        <input type="text" class="form-control is-valid" name="login" id="login">
        <label for="mdp">Mot de Pass</label>
        <input type="password" class="form-control is-valid" name="password" id="password">
        <input type="submit" class="btn btn-success my-2" name="Ajouter" value="ajouter">
    </form>
<!-- TODO: This is for server side, there is another version for browser defaults -->
<?php $content=ob_get_clean();?>
<?php include_once 'views/layout.php';?>

