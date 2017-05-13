<?php
class PersistenciaPersona
{
    //param es un objeto de tipo Usuario
    //conex es una variable de tipo conexion


   public function consTodos( $conex)
   {

        $sql = "select * from persona";

        $result = $conex->prepare($sql);
        $result->execute();
        $resultados=$result->fetchAll();


        return $resultados;
    }

   public function consUno($obj, $conex)
   {
        $id= trim($obj->getId());
        $sql = "select * from persona where id=:id";

        $result = $conex->prepare($sql);
	      $result->execute(array(":id" => $id));
		    $resultados=$result->fetchAll();


        return $resultados;
    }

    public function consXdepto($obj, $conex)
    {
    	$idDepto= trim($obj->getIdDepto());
    	//die(var_dump($idDepto));
    	$sql = "select * from persona where idDepto=:idDepto";

    	$result = $conex->prepare($sql);
    	$result->execute(array(":idDepto" => $idDepto));
    	$resultados=$result->fetchAll();


    	return $resultados;
    }


 }

?>
