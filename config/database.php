<?php
class Database {
    public static function Connect() {
        $db = new mysqli('localhost', 'root', '2019hr603', 'ventas', '3306');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
?>

