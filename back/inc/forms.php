<?php
include "Fonctions.php";
$use=new Fonctions();
if(isset($_POST["form"])){
    echo $_POST["form"];
    if ($_POST["form"]=="auth1"){

        if (isset($_POST["aname"]) && isset($_POST["pass"]))
        {


            $aname=$_POST["aname"];
            $pass=$_POST["pass"];
            echo $aname;
            echo $pass;
            $u=$use->Logedin($aname,$pass);
            $logedin=false;


            if(!empty($aname)&&!empty($pass)){
                foreach ($u as $t)
                {
                    $logedin=true;
                    if(($t['aname']===$aname)&&(($t['pass']===$pass))){
                        session_start();
                        $_SESSION["aname"]=$t["aname"];
                        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                        header("Location: ../../back/index.php");
                    }
                }
            }
            if ($logedin==false){
                echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                // puis on le redirige vers la page d'accueil
                echo '<meta http-equiv="refresh" content="0;URL=../../back/other-login.php">';
            }
        }
        else{

            echo '<body onLoad="alert(\'erreur lors de l ajout...\')">';

            echo '<meta http-equiv="refresh" content="1;URL=../../back/other-login.php">';
        }
    }
}