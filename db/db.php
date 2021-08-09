<?php

$user='postgres';
$pass='password';


try {
    $dbconn = new PDO('pgsql:host=localhost; dbname=edusis-oas; port=5432', $user, $pass);

    if ($dbconn) {
        echo 'Connection successful!';
    }
   

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
    
}



?>