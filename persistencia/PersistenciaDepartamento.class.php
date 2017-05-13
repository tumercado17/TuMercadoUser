<?php
class PersistenciaDepartamento
{
    //param es un objeto de tipo Usuario
    //conex es una variable de tipo conexion


  public function consTodos( $conex)
  {

    $sql = "select * from departamento";

    $result = $conex->prepare($sql);
		$result->execute();
		$resultados=$result->fetchAll();


       return $resultados;
  }

  public function consUno($obj, $conex)
  {
    $id= trim($obj->getId());
    $sql = "select * from departamento where id=:id";

    $result = $conex->prepare($sql);
	  $result->execute(array(":id" => $id));
		$resultados=$result->fetchAll();


    return $resultados;
  }


}

?>
