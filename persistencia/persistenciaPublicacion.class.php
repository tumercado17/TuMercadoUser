<?php
Require_once('../logica/funciones.php');

  class persistenciaPublicacion{

    function crear($obj,$conex){

      $id          = 0;
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



    public function buscarPubl($obj,$conex){

      $busq = $obj->getNombre();
      $cat = $obj->getCategoria();
      $nuevUsu = $obj->getTipo();
      $orden = $obj->getOrden();
      if ($orden == 'mayMen'){
      $sql = "SELECT `nombrepubli`, `precio`, `categoria`, `stock`, `fecha`, `tipo`, `nombre` FROM publicacion p,  persona pe WHERE p.cipersona = pe.ci and p.nombrepubli=:nombre and p.categoria=:categoria and p.tipo=:tipo order by precio desc;";
      $consulta = $conex->prepare($sql);
      $consulta->execute(array(
                                ":nombre" => $busq,
                                ":categoria" => $cat,
                                ":tipo" => $nuevUsu
                              )
                          );
      $resultado=$consulta->fetchAll();
      return $resultado;
      }
      elseif($orden == 'menMay'){
        $sql = "SELECT `nombrepubli`, `precio`, `categoria`, `stock`, `fecha`, `tipo`, `nombre` FROM publicacion p,  persona pe WHERE p.cipersona = pe.ci and p.nombrepubli=:nombre and p.categoria=:categoria and p.tipo=:tipo order by precio;";
        $consulta = $conex->prepare($sql);
        $consulta->execute(array(
                                  ":nombre" => $busq,
                                  ":categoria" => $cat,
                                  ":tipo" => $nuevUsu
                                )
                            );
        $resultado=$consulta->fetchAll();
        return $resultado;
      }
      elseif($orden == 'def'){
        $sql = "SELECT `nombrepubli`, `precio`, `categoria`, `stock`, `fecha`, `tipo`, `nombre` FROM publicacion p,  persona pe WHERE p.cipersona = pe.ci and p.nombrepubli=:nombre and p.categoria=:categoria and p.tipo=:tipo;";
        $consulta = $conex->prepare($sql);
        $consulta->execute(array(
                                  ":nombre" => $busq,
                                  ":categoria" => $cat,
                                  ":tipo" => $nuevUsu
                                )
                            );
        $resultado=$consulta->fetchAll();
        return $resultado;
      }
    }
  }

//  SELECT `nombrepubli`, p.`precio`, `categoria`, `stock`, p.`fecha`, `tipo`, pe.`nombre` FROM publicacion p,  persona pe, usuario u WHERE p.cipersona = pe.ci and  pe.ci = u.ciusuario and p.nombrepubli='putas' and p.categoria='tecn' and p.tipo='nuevo' order by p.precio ASC, u.nombre DESC;

 ?>
