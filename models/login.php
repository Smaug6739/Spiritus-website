<?php

session_start();
require_once("../classes/User.php");

if (isset($_POST["submit"])) {
    //error_log("submit ok", 0);

    if (isset($_POST["login"]) && isset($_POST["pass"])) {

        $login = htmlspecialchars($_POST["login"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $User = new User($login, $pass);
        if($User->verifyPass()) {

            $User->setLogged(true);

            if($User->getAdmin() == 1) {

                $_SESSION["admin"] = $User->getId();
                $_SESSION["admin_name"] = $User->getLogin();
                $_SESSION["admin_super"] = $User->getSuperAdmin();
                header("Location: http://spiritus-tech.mon.world//admin/");

            } else {

                //error_log("User Logged", 0);

                $_SESSION["user"] = $User->getId();

                $_SESSION["user_name"] = $User->getLogin();

                $_SESSION["user_logged"] = $User->getLogged();

                header("Location: http://spiritus-tech.mon.world//");

            }



        } else {
        

            header("Location: http://spiritus-tech.mon.world//login.php");
            


            unset($_SESSION);

        }

        

    }

}

