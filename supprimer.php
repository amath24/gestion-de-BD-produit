<?php

$connection = mysqli_connect("localhost","root","","mdr");

$id = $_POST['id'];

mysqli_query($connection,"DELETE FROM produit WHERE ID='$id'");

header("Location: afficher.php");

?>