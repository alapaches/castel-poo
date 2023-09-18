<?php

require("models/dbconnect.php");

class Peche {
    function show($type) {
        require("templates/peches/".$type.".php");
    }
}