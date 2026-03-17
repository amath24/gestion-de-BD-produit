<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
      <form method="POST">
            <label for="login">login</label>
            <input type="text"name="A" id="login">
            <label for="password">password</label>
            <input type="password"name="B" id="password">
            <input type="Submit"Value="Connexion">
</form>
<?php
$good_login="admin";
$good_password="mdr";
if($good_login==$_POST['A']&& $good_password==$_POST['B'])
{
    echo"Connexion Reussie";
    header('location:dashboard.php');
}
else
echo"Erreur";
?>

</body>
</html>