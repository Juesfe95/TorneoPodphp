<?php
    require_once "Conexion.php";
    class Equipo extends Conexion{

        public $id;
        public $nombre;
        public $dt;
        public $IdMunicipio;

        public function save(){
            $this->abrir();
            $consulta = $this->conexion->prepare("INSERT INTO equipos VALUES(null,? ,? ,?)");
            $consulta->bindParam(1, $this->nombre);
            $consulta->bindParam(2, $this->dt);
            $consulta->bindParam(3, $this->IdMunicipio);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return  $filas;
        }

        public function all(){
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT e.*, m.nombre as mNombre FROM equipos e INNER JOIN municipios m
                                                 ON e.municipio_id = m.id");
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $equipos = $consulta->fetchAll();
            $this->cerrar();
            return  $equipos;
        }

        public function find($id)
        {
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM equipos WHERE id = ?");
            $consulta->bindParam(1, $id);
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $equipos = $consulta->fetchAll();
            $this->cerrar();
            return  $equipos[0];
        }

        public function update()
        {
            $this->abrir();
            $consulta = $this->conexion->prepare("UPDATE equipos SET nombre=?, dt=?, municipio_id=? WHERE id = ?");
            $consulta->bindParam(1, $this->nombre);
            $consulta->bindParam(2, $this->dt);
            $consulta->bindParam(3, $this->IdMunicipio);
            $consulta->bindParam(4, $this->id);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return  $filas;
        }

        public function delete()
        {
            $this->abrir();
            $consulta = $this->conexion->prepare("DELETE FROM equipos where id=?");
            $consulta->bindParam(1, $this->id);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return  $filas;
        }

        public function validarNombre()
        {
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM equipos WHERE UPPER(nombre)=UPPER(?)");
            $consulta->bindParam(1, $this->nombre);
            $consulta->execute();
            $logins = $consulta->fetchAll();
            $this->cerrar();
            if (count($logins) > 0) {
                return $logins[0];
            } else {
                return  null;
            }
        }
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
