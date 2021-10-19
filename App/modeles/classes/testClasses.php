<?php
    spl_autoload_register(function($classe){
        include  $classe . ".class.php";
        });

 $r = new mgr_formationPattern();
$r->read_all('formationpattern', 'FormationPattern'); 

/*   $t= new Connector();
$t->connect();  */
 

 /*  $file = 'C:\wamp64\www\CRM-Jures\App\params.ini';
$params = parse_ini_file($file,true);
extract($params['connexion']);
var_dump($params);    */