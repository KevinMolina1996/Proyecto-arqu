<?php

require "Conexion.php";

/*Mostrar Peliculas*/
class cineModel 
{
    static public function consulta_cine($valor)
    {
        if($valor != null)
        {
            $stmt = Conexion::conectar()->prepare("SELECT id, Nombre, Descripcion, Valoracion, Imagen FROM peliculas WHERE id = :valor");
            $stmt -> bindParam(":valor",$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt ->fetch();
        }
        else
        {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM peliculas");
            $stmt -> execute();
            return $stmt ->fetchAll();
            
        }

        $stms ->close();
        $stms =null;
      
    }

    static public function registro_cine($datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO peliculas(Nombre, Descripcion, Valoracion, Imagen) VALUES (:Nombre, :Descripcion, :Valoracion, :Imagen)");
        $stmt -> bindParam(":Nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":Descripcion",$datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":Valoracion",$datos["valoracion"], PDO::PARAM_STR);
        $stmt -> bindParam(":Imagen",$datos["imagen"], PDO::PARAM_STR);

        if($stmt->execute())
        {
			return "<script> alert('Pelicula registrada');
            window.location.href = 'Cine_read.php';</script>";	
		}
        else
        {
			return "error";
		}
		$stmt->close();		
		$stmt = null;
    }

    static public function eliminar_cine($id)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM peliculas WHERE id = :id");
        $stmt -> bindParam(":id",$id, PDO::PARAM_STR);
        if($stmt->execute())
        {
			return "<script> alert('Pelicula Eliminada');
             window.location.href = 'Cine_read.php';</script>";	
		}
        else
        {
			return "error";
		}
		$stmt->close();		
		$stmt = null;   
    }

    static public function edit_cine($id, $datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE peliculas SET Nombre = :Nombre, Descripcion = :Descripcion, Valoracion = :Valoracion, Imagen = :Imagen WHERE id = :id");
        $stmt -> bindParam(":id",$datos["id"], PDO::PARAM_STR);
        $stmt -> bindParam(":Nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":Descripcion",$datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":Valoracion",$datos["valoracion"], PDO::PARAM_STR);
        $stmt -> bindParam(":Imagen",$datos["imagen"], PDO::PARAM_STR);

        print_r($datos);

        if($stmt->execute())
        {
			return "<script> alert('Pelicula Actualizada');
             window.location.href = 'Cine_read.php';</script>";	
		}
        else
        {
			return "error";
		}
		$stmt->close();		
		$stmt = null;
    }

}

?>