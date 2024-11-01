<?php
    function conectandodb() : mysqli{
        $db = mysql_connect("localhost", "root", "", "bienesraices3");

        if($db) {
            echo "Conectado";
        } else {
            echo "No esta Conectado". mysql_connect_error();
        }
        return $db;
    }

    $db = conectandoddb();
?>