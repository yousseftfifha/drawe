<?php
include "config.php";
class Fonctions{
    public function Logedin($login,$pass){
        $req="select * from drawe.admin where aname='$login' && pass='$pass'";
        $db=config::getConnexion();
        try {
            $req=$db->query($req);
            return $req->fetchAll();
        }
        catch (Exception $e){
            die('Erreur '.$e->getMessage());
        }
    }
    public function getadmin($aname)
    {
        $sql="select * from drawe.admin where aname='$aname'";
        $db = config::getConnexion();
        try
        {
            $u=$db->query($sql);
            return $u;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
}
