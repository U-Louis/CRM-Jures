<?php

    class mgr_contact {

        public static $list;

        public static function getInner_contact($ID){
            $sql = ' 
            SELECT
                ID_contact               ,
                Nom_contact              ,
                Prenom_contact           ,
                Tel_contact              ,
                Tel2_contact             ,
                Mail_contact             ,
                NumeroAdresse_Contact    ,
                LibelleAdresse_Contact   ,
                ComplementAdresse_Contact,
                VilleAdresse_Contact     ,
                CodePostalAdresse_Contact
            FROM
                contact
            WHERE
                ID_contact = ?
            ';
        $connexion = Connector::connect();
        $res = $connexion->prepare($sql);
        $res->execute(array($ID));
        $res->setFetchMode(PDO::FETCH_ASSOC|PDO::FETCH_PROPS_LATE);
        $ans = $res->fetchAll();
        $res->closeCursor();
        Connector::disconnect();
        self::$list = $ans;
        return $ans;
    }
}