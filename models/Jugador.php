<?php
require_once "Conexion.php";
class Jugador extends Conexion
{

    public $id;
    public $nombre;
    public $posicionId;
    public $equipoId;

    public function save()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("INSERT INTO jugadores VALUES(null,? ,? ,?)");
        $consulta->bindParam(1, $this->nombre);
        $consulta->bindParam(2, $this->posicionId);
        $consulta->bindParam(3, $this->equipoId);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function all()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT j.*, e.nombre as eNombre, p.nombre as pNombre FROM jugadores j
                                              INNER JOIN equipos e ON (j.equipo_id = e.id) 
                                              INNER JOIN posiciones p oN (j.posicion_id = p.id)");
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $jugadores = $consulta->fetchAll();
        $this->cerrar();
        return  $jugadores;
    }

    public function find($id)
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM jugadores WHERE id = ?");
        $consulta->bindParam(1, $id);
        $consulta->setFetchMode(PDO::FETCH_OBJ);
        $consulta->execute();
        $jugadores = $consulta->fetchAll();
        $this->cerrar();
        return  $jugadores[0];
    }

    public function update()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("UPDATE jugadores SET nombre=?, posicion_id=?, equipo_id=? WHERE id = ?");
        $consulta->bindParam(1, $this->nombre);
        $consulta->bindParam(2, $this->posicionId);
        $consulta->bindParam(3, $this->equipoId);
        $consulta->bindParam(4, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function delete()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("DELETE FROM jugadores where id=?");
        $consulta->bindParam(1, $this->id);
        $consulta->execute();
        $filas = $consulta->rowCount();
        $this->cerrar();
        return  $filas;
    }

    public function validarNombre(){}

    public function VerificarEliminar()
    {
        $this->abrir();
        $consulta = $this->conexion->prepare("SELECT * FROM jugadores j WHERE j.equipo_id = ?");
        $consulta->bindParam(1, $this->id);
        $consulta->execute();
        $logins = $consulta->fetchAll();
        $this->cerrar();
        if (count($logins) > 0) {
            return $logins[0];
        } else {
            return  null;
        }
    }
}
