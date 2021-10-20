<?php
    spl_autoload_register(function($classe){
        include "classes/". $classe . ".class.php";
        });


    Class mgr_formationPattern {
        
        //INIT
        public static $list;

    //================== METHODS =======================
    /**
     * fetches the whole table formationPattern
     */
    public static function read_all() {
        $sql = 
            'SELECT * FROM formationpattern';
        $connexion = Connector::connect();
        $res = $connexion->prepare($sql);
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC|PDO::FETCH_PROPS_LATE);
        $ans = $res->fetchAll();
        $res->closeCursor();
        Connector::disconnect();
        self::$list = $ans;
        return $ans;
    }

    /**
     * calls read_all()
     * check if inputs are empty / libelle is available
     * creates a new formation pattern
     */
    public static function create(){
        //INIT
        if(!(isset($_POST['libelle']) && isset($_POST['descriptif']))){
            return null;
        }
        
        //test empty
        if ($_POST['libelle'] == ''){
            throw new Exception("<strong>Libellé vide  - Ajout impossible</strong> <br>");
            return null;
        }

        if ($_POST['descriptif'] == ''){
            throw new Exception("<strong>Descriptif vide  - Ajout impossible</strong> <br>");
            return null;
        }

        //init mgr
        $tempInstance = new mgr_formationPattern();
        $list = $tempInstance->read_all();

        $var1 = $_POST['libelle'];
        $var2 = $_POST['descriptif'];
        $libs = [];
        foreach($list as $item){
            array_push($libs, $item['Libelle_formationPatern']);
        }

        //Test doublon
        if(in_array($var1, $libs)){
            throw new Exception("<strong>Duplicata de libellé - Ajout impossible</strong> <br>");
            return null;
        }
        

        //INSERT
        $sql = 
            'INSERT INTO `formationpattern`
            ( `Libelle_formationPatern`, `Descriptif_formation`)
            VALUES (?,?)'; 
        $connexion = Connector::connect();
        $res = $connexion->prepare($sql);
        $res->execute(array($var1, $var2));

        $res->closeCursor();
        Connector::disconnect();
    }
    
    /**
     * calls mgr_formation::read_all() and check if formationPattern is used
     * calls mgr_habilitation::read_all() and check if formationPattern is used
     * if not, deletes the item
     * @param int $idToDelete
     */
    public static function delete(int $idToDelete){
        //TESTS
        //test if formation is used in a formation
        $tempInstance1 = new mgr_formation();
        $listFormations = $tempInstance1->read_all();
        $flagFound = false;
        foreach($listFormations as $item){
            if($item['ID_formationPattern'] == $idToDelete){
                $flagFound = true;
            }
        }
        if($flagFound === true) {
            throw new Exception("<strong>Une formation utilise ce modèle - suppression impossible</strong> <br>");
            return null;
        }
        

        //test if formation is used in a formation
        $tempInstance2 = new mgr_habilitation();
        $listHabilitations = $tempInstance2->read_all();
        $flagFound = false;
        foreach($listHabilitations as $item){
            if($item['ID_formationPattern'] == $idToDelete){
                $flagFound = true;
            }
        }
        if($flagFound === true) {
            throw new Exception("<strong>Une habilitation utilise ce modèle - suppression impossible</strong> <br>");
            return null;
        }
        //DELETION
         $sql = 
            'DELETE FROM `formationpattern`
            WHERE `formationpattern`.`ID_formationPattern` = ?';
        $connexion = Connector::connect();
        $res = $connexion->prepare($sql);
        $res->execute(array($idToDelete));
        $res->closeCursor();
        Connector::disconnect();     
        }

        public static function update(){
        
        }
    //================== DISPLAY =======================    


}