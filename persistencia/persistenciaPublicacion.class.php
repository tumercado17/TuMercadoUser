<?php
Require_once('../logica/funciones.php');

  class persistenciaPublicacion{

    function crear($obj,$conex){

      $id          = 22;
      $titulo      = $obj->getNombre();
      $descripcion = $obj->getDescripcion();
      $tipo        = $obj->getTipo();
      $precio      = $obj->getPrecio();
      //$cipersona   = $_SESSION['ci']; para pruebas
      $cipersona = 12345678;
      $categoria   = $obj->getCategoria();
      $stock       = $obj->getStock();

      //SQL
      $sql = "select MAX(id) from publicacion";
      $consulta = $conex->prepare($sql);
      $consulta->execute();
      $resultado=$consulta->fetchAll();
      $dato = intval($resultado[0][0]);
      $id = $dato + 1;

      try{
      $sql = "insert into publicacion values(
        :id,
        :cipersona,
        :nombre,
        :precio,
        :descripcion,
        :categoria,
        :stock,
        NOW(),
        :tipo)";

      $consulta = $conex->prepare($sql);																			//DEFINIMOS LA CONSULTA, Y LA PREPARAMOS
      $consulta->execute(array(
        ':id'=>$id,
        ':cipersona'=>$cipersona,
        ':nombre'=>$titulo,
        ':precio'=>$precio,
        ':descripcion'=>$descripcion,
        ':categoria'=>$categoria,
        ':stock'=>$stock,
        ':tipo'=>$tipo));
        return true;
      }
      catch(PDOException $e){
  	       $conex->rollBack();
           return false;
      }
    }
  }

 ?>
