<?PHP
include "crudProduit.php";
$crud = new crudProduit();
$crud->delete($_GET["id"]);

header('Location: http://localhost/projet2/produit.php');

?>