<?php

class Connector
{

    public static function getConnector() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'urErasmus';
        return new mysqli($host, $user, $pass, $db);
    }

}
