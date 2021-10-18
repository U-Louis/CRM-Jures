<?php
    require_once('modeles/classes/Connector.class.php');
    require_once('modeles/classes/Crud.class.php');

    const RC = "<br />\n";

    try {
        // create connexion
        $connexion = Connector::getConnexion();
//var_dump($connexion);
        echo "CONNEXION REUSSIE" . RC;

        // read_ByParam
        $test2=Crud::read_byParam("contact", "ID_Contact");

        // create
         echo $test3=Crud::create("habilitation", array("ID_Habilitation"," Libelle_Habilitation"," DebutValidite_Habilitation"),array("'h30'","'Web'","'1993-11-24'","'2003-11-24'",1,1,0));

        // update
         echo $test4=Crud::update("habilitation",array("Libelle_Habilitation = 'Web'","DebutValidite_Habilitation='2009-10-30'"), "ID_Habilitation = 'h30'");

        // delete
         echo $test5=Crud::delete("habilitation",array("ID_Habilitation='h30'"));
        
        $test= Crud::read_all("jure");
        print_r($test.RC);

    } catch (PDOException $e) {
        echo $e->getMessage() . RC;
        echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
        echo $e->getMessage() . RC;
    }

    echo RC . "LE PROGRAMME CONTINUE ..." . RC;

    // read_All
    try{
        $test= Crud::read_all("jure");
        print_r($test.RC);

    } catch(CrudException $e) {
        echo $e->getMessage().RC;
    }
    
?>