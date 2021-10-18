<?php

    Class Crud{

        //=================== INIT =========================


        //================= CONSTRUCTOR ====================
        public function __construct(){
        }

        //================== SETTERS =======================        
        //================== GETTERS =======================

        //================== METHODS =======================
        protected function read_all($table){

            $sql = "SELECT * FROM".$table;

            // get connect
            $connexionPDO = Connector::getConnexion();

            // execute the request
            $request = $connexionPDO->prepare($sql);
vardump($request);
            $request->execute(array($table));

            // define fetchmode


            // recover data
            $records = $request->fetchAll(FETCH_ASSOC);

            // close cursor and connexion
            $request->closeCursor();
            Connector::disconnect();

            return $records;
        }

        protected function read_byParam($table, $param){

            $sql = "SELECT ".$param."FROM ".$table;

            //get connect
            $connexionPDO = Connector::getConnexion();

            // execute the request
            $request = $connexionPDO->prepare($sql);
vardump($request);
            $request->execute(array($table));

            //recover data

            $record = $request->fetchAll(FETCH_ASSOC);

            //close cursor and connexion
            $request->closeCursor();
            Connector::disconnect();

            return $records;

        }

        protected function create(){

        }

        protected function update(){

        }

        protected function delete(){

        }


        
        //================== DISPLAY =======================
    }