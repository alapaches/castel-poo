<?php


class Session {
    function connexion()
    {
        if(!$_POST) {
            require("templates/forms/connectAdmin.php");
        } else {
            $user = $_POST["username"];
            $mdp = $_POST["password"];
            if (!empty($user) && !empty($mdp)) {
                require_once("models/connectionAdmin.php");
                $sessionClass = new ConnectionAdmin();
                $sessionClass->connectionAdmin($user, $mdp);
            }
        }
    }
    
    function deconnexion()
    {
        require_once("models/connectionAdmin.php");
        $sessionClass = new ConnectionAdmin();
        $sessionClass->deconnectionAdmin();
    }
}