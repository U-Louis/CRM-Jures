<?php
    spl_autoload_register(function($classe){
        include "modeles/classes/" . $classe . ".class.php";
        });

    //INIT
    $route = 'home';

    if (isset($_GET['route'])) {
        $route = $_GET['route'];
    }


    //Routing
//var_dump($_GET);
//var_dump($_POST);

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
            if( ( isset($_POST['libelle']) || isset($_POST['descriptif']) )
            && (isset($_POST['addFormationPattern'])) ){
                try{
                    mgr_formationPattern::create();
                }
                catch (Exception $e){
                    echo '<div class="alert alert-warning" role="alert">'.$e->getMessage().'</div>';
                }
            }
            if( isset($_POST['delFormationPattern'])){
                try{
                    mgr_formationPattern::delete($_POST['delFormationPattern']);
                }
                catch (Exception $e){
                    echo '<div class="alert alert-warning" role="alert">'.$e->getMessage().'</div>';
                }
            }
            if( isset($_POST['modificationToConfirm'])){
                try{
                    mgr_formationPattern::update($_POST['modifyFormationPattern']);
                }
                catch (Exception $e){
                    echo '<div class="alert alert-warning" role="alert">'.$e->getMessage().'</div>';
                }                
            }

            require('views/header.php');
            require('views/gestionFormationPattern.php');
            require('views/footer.php');
        break;

        case 'Gestion des jurés':
            if(isset($_POST["deleteJure"])){
                JureMgr::delete();
            }
            require('views/header.php');
            require('views/gestionJures.php');
            require('views/footer.php');
        break;
        
        case "Ajouter un juré":
            if(isset($_POST['nomContact']) && isset($_POST['prenomContact']) && isset($_POST['tel']) && isset($_POST['mail']) && isset($_POST['numAdresse']) && isset($_POST['libelAdresse']) && isset($_POST['vilAdresse']) && isset($_POST['CPAdresse'])){
                echo "<script>alert('Juré bien ajouté')</script>";
                JureMgr::create();
            }
            else{
                require('views/header.php');
                require('views/nouveauJure.php');
                require('views/footer.php');
            }
            
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