<?php
include "Fonction.php";
$use=new Fonction();
echo "kahba";
if(isset($_POST["form"])){
    echo $_POST["form"];
    if ($_POST["form"]=="auth"){

        if (isset($_POST["uname"]) && isset($_POST["pass"]))
        {


            $uname=$_POST["uname"];
            $pass=$_POST["pass"];
            echo $uname;
            echo $pass;
            $u=$use->Logedin($uname,$pass);
            $logedin=false;


            if(!empty($uname)&&!empty($pass)){
                foreach ($u as $t)
                {
                    $logedin=true;
                    if(($t['uname']===$uname)&&(($t['pass']===$pass))){
                        session_start();
                        $_SESSION["uname"]=$t["uname"];
                        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                        header("Location: ../../front/index.php");
                    }
                }
            }
            if ($logedin==false){
                echo '<body onLoad="alert(\'Membre non reconnu...\')">';
                // puis on le redirige vers la page d'accueil
                echo '<meta http-equiv="refresh" content="0;URL=../../front/login.php">';
            }
        }
        else{

           echo '<body onLoad="alert(\'erreur lors de l ajout...\')">';

            echo '<meta http-equiv="refresh" content="1;URL=../../front/login.php">';
        }
    }
}