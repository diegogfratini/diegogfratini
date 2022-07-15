<?php
class Conexion extends PDO {
    private $tipo_de_base = 'mysql';
    private $host = 'localhost';
    private $usuario = '';
    private $contrasena = '';
    public function __construct($base='') {
        try {
            parent::__construct($this->tipo_de_base . ':host=' . $this->host . ';dbname=' . $base, $this->usuario, $this->contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\'', PDO::ATTR_PERSISTENT => true));
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }

    

}
