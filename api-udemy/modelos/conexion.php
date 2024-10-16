<?php
class Conexion {
    static public function conectar() {
        try {
            $link = new PDO("mysql:host=localhost;dbname=api_udemy", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Manejo de errores
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de fetch predeterminado
                PDO::ATTR_PERSISTENT => true, // Conexión persistente
            ]);
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
}