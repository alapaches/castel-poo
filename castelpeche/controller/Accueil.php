<?php

require("models/dbconnect.php");

class Accueil {
    function index() {
        require("templates/accueil.php");
    }
}