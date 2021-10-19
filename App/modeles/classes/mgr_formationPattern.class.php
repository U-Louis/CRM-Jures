<?php
    spl_autoload_register(function($classe){
        include "classes/". $classe . ".class.php";
        });


    Class mgr_formationPattern {
        
        //INIT
        private static $list;

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
        self::$list = $ans;
var_dump(self::$list);
        return $ans;
    }
    
/*     public static function read_byParam(){
        
    } */
        
    public static function create(){

        //INIT
        if(!(isset($_POST['libelle']) && isset($_POST['descriptif']))){
            return null;
        }
/*         if(in_array($_POST['libelle'], self::$list['Libelle_formationPatern'])){
            throw new Exception("Duplicata de libellé");
            return null;
        } */

        $var1 = $_POST['libelle'];
        $var2 = $_POST['descriptif'];
        //test vars
var_dump($var1);
var_dump($var2);

        //INSERT
/*         try{ */        
        $sql = 
            'INSERT INTO `formationpattern`
            ( `Libelle_formationPatern`, `Descriptif_formation`)
            VALUES (?,?)'; 
        $connexion = Connector::connect();
        $res = $connexion->prepare($sql);
        $res->execute(array($var1, $var2));

        $res->closeCursor();
        Connector::disconnect();

/*     }catch(PDOexception $e){}
 */    }
        
    public static function update(){
        
    }
        
    public static function delete(){

    }
    

    //================== DISPLAY =======================
}