<?php

include "crudCategorie.php";
$crud = new crudCategorie();



if(!empty($_POST)) {
    $emp = new classCategorie($_POST["categorieA"] , $_POST["categorieB"]);
    $crud->ajouter($emp);
    header('Location: http://localhost/projet2/produit.php');
}
?>