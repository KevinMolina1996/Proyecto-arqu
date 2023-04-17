<?php

 class Conexion
{
    public function conectar()
    {
        $driver    = "mysql";
        $host      = "localhost";
        $user      = "root";
        $pass      = "";
        $database  = "cine";
        $charset   = "utf8";
        $key       = "150";

        try 
        {
            $con = new PDO("$driver:host=$host;dbname=$database;charset=$charset",$user,$pass);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        }
        catch(Exception $e) 
        {
            echo("Error ".$e->getMessage());
        }
    }  

}