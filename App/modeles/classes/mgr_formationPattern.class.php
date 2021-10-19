<?php
    spl_autoload_register(function($classe){
        include "classes/". $classe . ".class.php";
        });


    Class mgr_formationPattern {

    //================== METHODS =======================
    public static function read_all(string $table/* , string $class */) {
        $sql = 
            'SELECT * FROM formationpattern';
        $connexion = Connector::connect();
        $res = $connexion->prepare($sql);
        $res->bindValue(':table', $table, PDO::PARAM_STR); //BIND STR ?!
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC /* FETCH_CLASS as object */|PDO::FETCH_PROPS_LATE/* , $class , array('ID_formationPattern', 'libelle_formationPattern', 'description_formation', array('neededHabilitations'))*/ );
        $ans = $res->fetchAll();
        $res->closeCursor();
        Connector::disconnect();
        return $ans;
    }
    
    public static function read_byParam(){
        
    }
        
    public static function create(){

    }
        
    public static function update(){
        
    }
        
    public static function delete(){

    }
    

    //================== DISPLAY =======================
}