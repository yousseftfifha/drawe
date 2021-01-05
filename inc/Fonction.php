<?php
include "../inc/config.php";
class Fonction{
    public function Logedin($login,$pass){
        $req="select * from drawe.client where uname='$login' && pass='$pass'";
        $db=config::getConnexion();
        try {
            $req=$db->query($req);
            return $req->fetchAll();
        }
        catch (Exception $e){
            die('Erreur '.$e->getMessage());
        }
    }
    public function getclient($uname)
    {
        $sql="select * from drawe.client where uname='$uname'";
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
