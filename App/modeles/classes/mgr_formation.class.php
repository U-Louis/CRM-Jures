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
            'SELECT * FROM formation';
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