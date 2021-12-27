<?php


if (!empty($_GET['prenom']))
{
    echo 'Bonjour, votre prénom est: ' . $_GET['prenom'] . '<br>';
}
else
{
    echo 'Merci de saisir le prénom';

}
echo '<pre>';
print_r($_GET);
echo '</pre>';
?>