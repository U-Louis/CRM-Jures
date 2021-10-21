<?php
    spl_autoload_register(function($classe){
        include "classes/". $classe . ".class.php";
        });


    Class mgr_formation {
        
        //INIT
        public static $list;

    //================== METHODS =======================
    /**
     * fetches the whole table formationPattern
     */
    public static function read_all() {
        $sql = 
            'SELECT fn.`ID_formation`, fn.`Libelle_Formation`, fn.`Date_DebutFormation`, fn.`Date_FinFormation`, c.`nom_contact`, fp.`Libelle_formationPatern`	
             FROM formation fn
             JOIN formationPattern fp
             ON fn.ID_formationPattern = fp.ID_formationPattern
             JOIN formateur fr
             ON fn.ID_formateur = fr.ID_formateur
             JOIN contact c
             ON fr.ID_contact = c.ID_contact
            '
            ;
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
}