<?php

class Manager
{
    protected function getConnexion()
    {
        $connexion=new \PDO('mysql:host=localhost;dbname=;charset=utf8', 'root','',array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_EMULATE_PREPARES=>false));
        return $connexion;
    }
}

?>