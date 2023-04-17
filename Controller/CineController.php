<?php

require "../Model/CineModel.php";


class CineController
{
    static public function controller_cine($valor)
    {
        if(isset($_GET['idEdit']))
        {
            $valor = $_GET['idEdit'];
            $datos = cineModel::consulta_cine($valor);
            return $datos;
            
        }
        else 
        {
            $datos = cineModel::consulta_cine($valor);
            return $datos;
        } 
       
    }

    static public function controller_view()
    {
        if(isset($_GET['idEdit']))
        {
            $datos = consulta_cine($valor);
        }
    }

    static public function controller_create_movie()
    {
        if (isset($_POST['nuevo_nombre']))
        {
          $datos = array("nombre" => $_POST['nuevo_nombre'],
                         "descripcion" => $_POST['Descripcion'],
                         "valoracion" => $_POST['Valoracion'],
                         "imagen" => $_POST['Imagen']
                        );
            
            $datos = cineModel::registro_cine($datos);
            print($datos);
            
        } 
    }
    
    static public function controller_delete_movie()
    {
        if(isset($_GET['idDelete']))
        {
            $id = $_GET['idDelete'];
            $datos = cineModel::eliminar_cine($id);
            print($datos);
            
        }
    }

    static public function controller_edit_movie()
    {
        if(isset($_POST['idEdit']))
        {
            $id = $_GET['idEdit'];
            $datos = array("nombre" => $_POST['nuevo_nombre'],
            "descripcion" => $_POST['Descripcion'],
            "valoracion" => $_POST['Valoracion'],
            "imagen" => $_POST['Imagen'],
            "id" => $_POST['idEdit']
           );

           $datos = cineModel::edit_cine($id, $datos);
           print($datos);
        }
    }

}

?>