<?php
if (isset($_GET ['validation'])){

//    echo '<pre>';
//    print_r($_GET);
//    echo '</pre>';

    if (empty($_GET ['prenom'])){
    echo 'Tous les champs du formulaire doivent être remplis';
    }
    else{
        $prenom = $_GET['prenom'];
        echo 'Votre prénom est : ' . $prenom . '<br>';

    }


}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>formualire</title>
    <link rel="stylesheet" href="styles.css">
    <script src=""script.js"></script>


</head>
<body>
<form action="formulaire.php" method="get">
    <p><input type="text" name="prenom"> Votre prénom</p>
    <p><input type="email" name="email"> Votre email</p>
    <p>Votre couleur préférée:</p>
    <input type="radio" name="color" value="orange">Orange <br>
    <input type="radio" name="color" value="rouge">Rouge <br>
    <input type="radio" name="color" value="vert">Vert <br>
    <input type="submit" name="validation">

</form>




</body>

</html>
