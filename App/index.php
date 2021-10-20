<?php
/*     require_once('modeles/classes/Connector.class.php');
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
    } ================================================================================================================================
    ================================================================================================================================*/

    spl_autoload_register(function($classe){
        include "modeles/classes/" . $classe . ".class.php";
        });

/* echo "GET : "; var_dump($_GET);
echo "POST : "; var_dump($_POST); */

    //INIT
    $route = 'home';

    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    }


    //Routing
    switch ($route){
        case 'home':
            require('views/header.php');
            require('views/gestionFormationPattern.php');
            require('views/footer.php');
        break;

        case 'detailJure':
            require('views/header.php');
            require('views/detailJure.php');
            require('views/footer.php');
        break;

        case 'detailUtilisateur':
            require('views/header.php');
            require('views/detailUtilisateur.php');
            require('views/footer.php');
        break;

        case 'gestionEntreprise':
            require('views/header.php');
            require('views/gestionEntreprise.php');
            require('views/footer.php');
        break;

        case 'Gestion des formateurs':
            require('views/header.php');
            require('views/gestionFormateurs.php');
            require('views/footer.php');
        break;

        case 'Gestion des formations':
            require('views/header.php');
            require('views/gestionFormation.php');
            require('views/footer.php');
        break;

        case 'Gestion des modèles de formation':
            if((isset($_POST['libelle']) || isset($_POST['descriptif']))){
                mgr_formationPattern::create();
            }
            require('views/header.php');
            require('views/gestionFormationPattern.php');
            require('views/footer.php');
        break;

        case 'Gestion des jurés':
            require('views/header.php');
            require('views/gestionJures.php');
            require('views/footer.php');
        break;

        case 'gestionJuresDeSession':
            require('views/header.php');
            require('views/gestionJuresDeSession.php');
            require('views/footer.php');
        break;

        case 'Gestion des sessions d\'examen':
            require('views/header.php');
            require('views/gestionSessionsExamen.php');
            require('views/footer.php');
        break;

        case 'gestionUtilisateurs':
            require('views/header.php');
            require('views/gestionUtilisateurs.php');
            require('views/footer.php');
        break;

        case 'Mon compte':
            require('views/header.php');
            require('views/detailUtilisateur.php');
            require('views/footer.php');
        break;

        case 'Deconnexion':
            require('views/connexion.php');
        break;


    }


    
?>