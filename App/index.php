<?php
    $host = 'localhost';
    $port = 3306;
    $bdd = 'crm_jures';
    $user = 'root';
    $password = '';

    $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";
    try {
        // Etape 1 - Créer une connexion BDD
        $mysqlPDO = new PDO($dsn, $user, $password,
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo "CONNEXION réussie"; 
        var_dump($mysqlPDO);                       
    } catch(PDOException $e) { 
        // en cas erreur on affiche un message et on arrete tout
        die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
    }
?>