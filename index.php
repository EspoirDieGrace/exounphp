<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ciela</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
<?php
include('./pages/menu.php')
?>
</body>
</html>

<?php
if(isset($_GET["page"])) {// s'il y a des éléments 
    $page=$_GET["page"]; //$_GET permet d'envoyer des infos mais ce n'est pas sécurisé
if($page == 1){
  include('./pages/favoris.php');
}else if($page == 2){
  include('./pages/loisir.php');
}}
else{
  include('./pages/accueil.php');
}
?>