<?PHP
include "crudProduit.php";
$crud = new crudCategorie();
$crud->delete($_GET["id"]);

header('Location: http://localhost/projet2/produit.php');

?>