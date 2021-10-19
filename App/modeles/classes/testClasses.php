<?php
    spl_autoload_register(function($classe){
        include  $classe . ".class.php";
        });


$r = new Habilitation('id_habi', 'libe_habi','debut', 'fin');
var_dump($r);