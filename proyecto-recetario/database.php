<?php 
    namespace Medoo;
    require 'Medoo.php';

    if(!isset($database)){
        $database = new Medoo([
            
            'type' => 'mysql',
            'host' => 'db4free.net:3306',
            'database' => 'all_recetario',
            'username' => 'sonnie',
            'password' => 'leejihoon'
        ]);
    }
?>