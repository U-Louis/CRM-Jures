<?php
    require_once('../modeles/Connector.class.php');

    const RC = "<br />\n";

    try {
        // create connexion
        $connexion = Connector::getConnexion();
//var_dump($connexion);
        echo "CONNEXION REUSSIE" . RC;
    } catch (PDOException $e) {
        echo $e->getMessage() . RC;
        echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
        echo $e->getMessage() . RC;
    }

    echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>