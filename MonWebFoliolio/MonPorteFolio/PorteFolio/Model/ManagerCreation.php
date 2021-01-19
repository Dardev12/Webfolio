<?php

require_once("Model/Manager.php");

class ManagerMembres extends Manager
{
    public function getProjet($TAG){
        $sql ='SELECT * FROM Themes 
        inner join Inscrit on Inscrit.Id=Themes.Id 
        where Login= :id order by Themes.Nom';
        $Theme=self::getConnexion()->prepare($sql);
        $Theme->bindparam('id',$login,pdo::PARAM_STR);
        $Theme->execute();
        return $Theme;
    }

}

?>