
<?php
$seasonName = 'printemps';
$seasonDescription = 'Le printemps (de l\'ancien français prins, premier, et temps) est l\'une des quatre saisons de l\'année, dans les zones tempérées. 
Il suit l\'hiver et précède l\'été. Le printemps se caractérise par un radoucissement par à coups de la température, 
la fonte des neiges, le bourgeonnement la floraison des plantes' ;
$seasonImage = 'printemps.jpg';

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?php echo $seasonName?></title>
    <link rel="stylesheet" href="styles.css">
    <script src=""script.js"></script>


</head>
<body>

<h1><?php echo $seasonName ?></h1>
<img src="<?php echo $seasonImage; ?>" alt="<?php echo $seasonName; ?>">
<p>
    <?php echo $seasonDescription;  ?>

</p>
<?php
//$season = array
//(   0 =>array('nom' => 'hiver', 'image' => 'ete.jpg'),
//    1 =>array('nom' => 'printemps', 'image' => 'printemps.jpg'),
//    2 =>array('nom' => 'été', 'image' => 'ete.jpeg'),
//    3 =>array('nom' => 'automne', 'image' => 'automne.jpg'),
//);

//foreach ($season as $clef => $valeur)
{
//    echo $clef . ' ';
//    echo $valeur . '<br>';

//    print_r($season);
//    var_dump($season);

//    $season [] = 'autre';
//
//    var_dump($season);
//
//    unset ($season[4]);
//
//    var_dump($season);

}

//    echo $season [2] ['nom'];
//    echo $season [2] ['image'];
//
//    foreach ($season as $season){
//
//        echo '<h1>' . $season ['nom'] . '</h1>';
//        echo '<img src="' . $season ['image'] . '"/>';
//    };
    echo $_SERVER ['REMOTE_ADDR'];
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
?>
</body>





</html>


