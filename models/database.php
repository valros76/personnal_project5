<?php

    function dbConnect(){
        $databaseInfos = parse_ini_file('config/bdd.ini');
        $host = $databaseInfos['host'];
        $dbname = $databaseInfos['dbname'];
        $username = $databaseInfos['username'];
        $password = $databaseInfos['password'];
        try{
            $bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', ''.$username.'', ''.$password.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
        }
        catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
    }

    $bdd = dbConnect();

?>