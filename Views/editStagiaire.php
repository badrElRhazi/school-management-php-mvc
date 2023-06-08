<?php
$title="Modifier  stagiaire";

ob_start();  
var_dump($stagiaire);
?>
    <form action="index.php?action=update" method="post">
        
        <input type="hidden" class="form-control is-valid" name="id" id="id" value="<?= $stagiaire->id?>">
        <label for="nom">Nom</label>
        <input type="text" class="form-control is-valid" name="nom" id="nom" value="<?= $stagiaire->nom?>">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control is-valid" name="prenom" id="prenom" value="<?= $stagiaire->prenom?>">
        <label for="age">Age</label>
        <input type="text" class="form-control is-valid" name="age" id="age" value="<?= $stagiaire->age?>">
        <label for="login">Login</label>
        <input type="text" class="form-control is-valid" name="login" id="login" value="<?= $stagiaire->login?>">
        <label for="mdp">Mot de Pass</label>
        <input type="password" class="form-control is-valid" name="password" id="password" value="<?= $stagiaire->password?>">
        <input type="submit" class="btn btn-success my-2" name="Modifier" value="modifier">
    </form>
<!-- TODO: This is for server side, there is another version for browser defaults -->
<?php $content=ob_get_clean();?>
<?php include_once 'views/layout.php';?>

