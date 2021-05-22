<?php
    require_once "Conexion.php";
    class Municipio extends Conexion{

        public $id;
        public $nombre;

        public function save(){
            $this->abrir();
            $consulta = $this->conexion->prepare("INSERT INTO municipios VALUES(null,?)");
            $consulta->bindParam(1, $this->nombre);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return  $filas;
        }

        public function all(){
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM municipios");
            $consulta->setFetchMode(PDO::FETCH_OBJ);
            $consulta->execute();
            $municipios = $consulta->fetchAll();
            $this->cerrar();
            return  $municipios;
        }

        public function find($id)
        {
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM municipios WHERE id = ?");
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
            $consulta = $this->conexion->prepare("UPDATE municipios SET nombre = ? WHERE id = ?");
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
            $consulta = $this->conexion->prepare("DELETE FROM municipios where id=?");
            $consulta->bindParam(1, $this->id);
            $consulta->execute();
            $filas = $consulta->rowCount();
            $this->cerrar();
            return  $filas;
        }

        public function validarNombre()
        {
            $this->abrir();
            $consulta = $this->conexion->prepare("SELECT * FROM municipios WHERE nombre=?");
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
            $consulta = $this->conexion->prepare("SELECT * FROM equipos e WHERE e.municipio_id = ?");
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
?>