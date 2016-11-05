<?php

$dsn = 'mysql:dbname=myapp;host=db';
$user = 'dev';
$password = '123456';

echo '<br /><br />';
try {
    $dbh = new PDO($dsn, $user, $password);
    echo '<span style="color:green"><strong>SUCCESS</strong></span>';
} catch (PDOException $e) {
    echo '<span style="color:red"><strong>Connexion échouée : ' . $e->getMessage().'</strong></span>';
}
?>
