<?php
require_once "Conexion.php";
class Login extends Conexion
{

    public $id;
    public $usuario;
    public $pasword;

    public function save()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("INSERT INTO login VALUES(null,?,md5(?))");
        $consulta->bindParam(1, $this->usuario);
        $consulta->bindParam(2, $this->pasword);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function all()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM posiciones");
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $municipios = $consulta->fetchAll();
        $this->cerrar();
        return  $municipios;
    }

    public function find($id)
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM posiciones WHERE id = ?");
        $consulta->bindParam(1, $id);
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $municipio = $consulta->fetchAll();
        $this->cerrar();
        return  $municipio[0];
    }

    public function update()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("UPDATE posiciones SET nombre = ? WHERE id = ?");
        $consulta->bindParam(1, $this->nombre);
        $consulta->bindParam(2, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function delete()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("DELETE FROM posiciones where id=?");
        $consulta->bindParam(1, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function validar_usuario()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM login WHERE usuario=? AND password=md5(?)");
        $consulta->bindParam(1, $this->usuario);
        $consulta->bindParam(2, $this->pasword);
        $consulta->execute();
        $logins = $consulta->fetchAll();
        $this->cerrar();
        if(count($logins) > 0){
            return $logins[0];
        }else{
            return  null;
        }  
    }

    public function validarNombre()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM login WHERE usuario=?");
        $consulta->bindParam(1, $this->usuario);
        $consulta->execute();
        $logins = $consulta->fetchAll();
        $this->cerrar();
        if (count($logins) > 0) {
            return $logins[0];
        } else {
            return  null;
        }
    }

    public function VerificarEliminar(){}
}
