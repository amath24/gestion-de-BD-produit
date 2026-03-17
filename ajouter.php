<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
</head>
<body>
    <h1> AJOUTER UN PRODUIT</h1>
      <form Method="post">
            <div>
                <label>NOM</label>
                <input type="text" name = "A">
            </div>
            <div>
                <label>PRIX</label>
                <input type="number" name = "B">
            </div>
            <div>
                <label>TYPE</label>
                <input type="text" name = "C">
            </div>
            <input type="submit" value="ajouter">
            <a href="afficher.php">aficher</a>
            <a href="modifier.php">Modifier</a>
            <a href="dashboard.php">RETOUR</a>
             <?php 
             if(isset($_POST['A']) && isset($_POST['B']) && isset($_POST['C']))
{
             $A = $_POST['A'];
             $B = $_POST['B'];
             $C = $_POST['C'];
             
              if($A != "" && $B != "" && $C != "")
    {
             $connection= mysqli_connect("localhost","root","","mdr");
              mysqli_query($connection,"INSERT INTO produit(NOM,PRIX,TYPE)VALUES('$A','$B','$C')");
             header("Location: ajouter.php");
    }
}
             ?>
             </form>
</body>
</html>