
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<h2>Liste des produits</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Type</th>
        <th>supprimer</th>
        <th>modifier</th>
    </tr>

    <?php

    $connection = mysqli_connect("localhost", "root", "", "mdr");



$P = mysqli_query($connection, "SELECT * FROM produit");

    while($r = mysqli_fetch_array($P)) {
        echo "<tr>";
        echo "<td>" . $r['ID'] . "</td>";
        echo "<td>" . $r['NOM'] . "</td>";
        echo "<td>" . $r['PRIX'] . "</td>";
        echo "<td>" . $r['TYPE'] . "</td>";
        echo "<td>
<form method='post' action='supprimer.php'>
<input type='hidden' name='id' value='".$r['ID']."'>
<input type='submit' value='Supprimer'>
</form>
    </td>";
    echo "<td>
<form method='post' action='modifier.php'>
<input type='hidden' name='id' value='".$r['ID']."'>
<input type='submit' value='Modifier'>
</form>

</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>
<a href="ajouter.php">Ajouter un produit</a>

</body>
</html>