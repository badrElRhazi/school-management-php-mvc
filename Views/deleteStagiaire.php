<?php
$title="Supprimer stagiaire";
ob_start();?>
<p>Do you really want to delete stagiaire Number : <?php  var_dump($id)?>  ?</p>
    <a class="btn btn-danger " href="index.php?action=destroy&id=<?= $id?>">Valid</a>
    <a class="btn btn-warning " href="index.php?action=list">Exit</a>
<?php
$content=ob_get_clean();
include_once 'Views/layout.php';

?>