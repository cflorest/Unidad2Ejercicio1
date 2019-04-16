<?php
class Usuario{
    private $usuario;
    private $clave;
    private $nombre;
    
    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function __construct($usuario, $clave, $nombre) {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $this->nombre = $nombre;
    }

    
    function ValidaAcceso() {
        if (!isset($dblink)) {
            return FALSE;
        }
        
       /* $PDOos=$dblink->prepare('select nombre from usuario where nomusuario = ? and clave=?');
        
        if(!$PDOos->execute(array($this->nomusuario, $this->clave))){
            retun false;
        }
        else {
            $row=$PDOos->fetch();
            $this->nombre=$row
        }*/
    }
    
}