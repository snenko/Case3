<?php
$db_user = 'lolipop_user' ;
$db_pass = '1111';
$dbh = new PDO('mysql:host=localhost;dbname=lolipop_user', $db_user, $db_pass);
/*
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $db_user, $db_pass);
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
*/