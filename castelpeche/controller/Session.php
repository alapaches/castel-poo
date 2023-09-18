<?php
require_once("models/connectionAdmin.php");

class Session {
    private $sessionClass;

    public function __construct()
    {
        $this->sessionClass = new ConnectionAdmin();
    }
    function connexion()
    {
        if(!$_POST) {
            require("templates/forms/connectAdmin.php");
        } else {
            $user = $_POST["username"];
            $mdp = $_POST["password"];
            if (!empty($user) && !empty($mdp)) {
                $this->sessionClass->connectionAdmin($user, $mdp);
            }
        }
    }
    
    function deconnexion()
    {
        $this->sessionClass->deconnectionAdmin();
    }
}