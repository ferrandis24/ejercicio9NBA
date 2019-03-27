<?php
/**
 * equipo
 */
class equipo
{
  private $conexion=null;
  private $Ciudad;
  private $Nombre;
  private $Division;
  private $Conferencia;

  function __construct()
  {
  }

  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */


  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["Ciudad"])||!isset($post["Nombre"])||!isset($post["Division"])||!isset($post["Conferencia"])){
      $error="";
    }elseif($post["Ciudad"]==""){
      $error="No has introducido el Ciudad";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Division"]==""){
      $error="No has introducido el Division";
    }elseif($post["Conferencia"]==""){
      $error="No has introducido el Conferencia";
    }else{
      $error=false;
      $this->Ciudad=$post["Ciudad"];
      $this->Nombre=$post["Nombre"];
      $this->Division=$post["Division"];
      $this->Conferencia=$post["Conferencia"];
    }
    return $error;
  }

  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarEquipo(){

    $consulta="INSERT INTO equipos (Ciudad, Nombre, Division, Conferencia)
                VALUES ('$this->Ciudad', '$this->Nombre', '$this->Division', $this->Conferencia)";
    $this->conexion->query($consulta);
    echo $consulta;
  }

  public function listaEquipos(){
  $res=$this->conexion->query("SELECT * FROM equipos");
      return $res;


}
}



 ?>
