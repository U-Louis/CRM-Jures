<?php

    require_once('CrudException.class.php');
    
    Class Crud{

        //=================== INIT =========================


        //================= CONSTRUCTOR ====================
        public function __construct(){
        }

        //================== SETTERS =======================        
        //================== GETTERS =======================

        //================== METHODS =======================
        public static function read_all($table){

            if($table=="contact"){
                $sql = "SELECT * FROM ".$table;

                // get connect
                $connexionPDO = Connector::getConnexion();

                // execute the request
                $request = $connexionPDO->prepare($sql);

                $request->execute();

                // recover data
                $records = $request->fetchAll(PDO::FETCH_ASSOC);

                // close cursor and connexion
                $request->closeCursor();
                Connector::disconnect();

                echo $sql;
                return $records;
            }
            else{
                throw new CrudException('Erreur dans la lecture de ces entités');
            }

            
        }

        public static function read_byParam($table, $param){

            $sql = "SELECT ".$param." FROM ".$table;

            //get connect
            $connexionPDO = Connector::getConnexion();

            // execute the request
            $request = $connexionPDO->prepare($sql);
var_dump($request);
            $request->execute();

            //recover data

            $records = $request->fetchAll(PDO::FETCH_ASSOC);

            //close cursor and connexion
            $request->closeCursor();
            Connector::disconnect();

            return $records;

        }

        public static function create($table,$tColumn,$tValue){
            // get connect
            $connexionPDO = Connector::getConnexion();

            //array ttt
            $columnString="";
            $valueString="";

            foreach ($tColumn as $column){
                $columnString.=$column.",";
            }

            $columnString = substr($columnString, 0, -1);

            print_r($columnString."<br>");

            foreach ($tValue as $value){
                $valueString.=$value.",";
            }

            $valueString = substr($valueString, 0, -1);

            print_r($valueString."<br>");


            //request
            $sql="INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";

            $request = $connexionPDO->prepare($sql);
            $request->execute(array($table));

            $count=$request->rowCount();

            if ($count == 0) {
                $message = "Lignes affectées : ".$count;
            } else {
                $message = "Confirmation : l'utilisateur a bien été ajouté.";
            }
            return $message;
        }

        public static function update($table,$tColumn,$condition){
            // get connect
            $connexionPDO = Connector::getConnexion();

            //array ttt
            $columnString="";

            foreach ($tColumn as $column){
                $columnString.=$column.",";
            }

            $columnString = substr($columnString, 0, -1);

            print_r($columnString."<br>");

            //request
            $sql="UPDATE ".$table." SET ".$columnString." WHERE ".$condition;

            $request = $connexionPDO->prepare($sql);
            print_r($request);

            $request->execute();


            
            $count=$request->rowCount();

            if ($count == 0) {
                $message = "Lignes affectées : ".$count;
            } else {
                $message = "Confirmation : l'utilisateur a bien été modifié.";
            }
            return $message;

        }

        public static function delete($table,$tCondition){
            // get connect
            $connexionPDO = Connector::getConnexion();

            //array ttt
            $conditionString="";

            foreach ($tCondition as $condition){
                $conditionString.=$condition.",";
            }

            $conditionString = substr($conditionString, 0, -1);

            print_r($conditionString."<br>");
            //request
            $sql="DELETE FROM ".$table." WHERE ".$conditionString;

            $request = $connexionPDO->prepare($sql);
            print_r($request);

            $request->execute();

            $count=$request->rowCount();

            if ($count == 0) {
                $message = "Lignes affectées : ".$count;
            } else {
                $message = "Confirmation : l'utilisateur a bien été supprimé.";
            }
            return $message;
        }


        
        //================== DISPLAY =======================
    }