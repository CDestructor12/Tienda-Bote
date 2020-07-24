<?php
    $mysqli = new mysqli("localhost", "report", "juanma01", "diseno_sistema");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MYSQL:";
    }
?>