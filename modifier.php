<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$connection = mysqli_connect("localhost","root","","mdr");
$r = array();

if(isset($_POST['id']))
{

$id = $_POST['id'];

$P = mysqli_query($connection,"SELECT * FROM produit WHERE ID='$id'");

$r = mysqli_fetch_array($P);
}

?>

<h2>Modifier Produit</h2>

<input type="hidden" name="id" value="<?php echo isset($r['ID']) ? $r['ID'] : ''; ?>">

Nom
<input type="text" name="nom" value="<?php echo isset($r['NOM']) ? $r['NOM'] : ''; ?>">

Prix
<input type="number" name="prix" value="<?php echo isset($r['PRIX']) ? $r['PRIX'] : ''; ?>">

Type
<input type="text" name="type" value="<?php echo isset($r['TYPE']) ? $r['TYPE'] : ''; ?>">

<input type="submit" name="modifier" value="Modifier">

</form>

<?php

if(isset($_POST['modifier']))
{

$id = $_POST['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$type = $_POST['type'];

mysqli_query($connection,"UPDATE produit SET NOM='$nom',PRIX='$prix',TYPE='$type' WHERE ID='$id'");

header("Location: afficher.php");

}

?>
    
</body>
</html>