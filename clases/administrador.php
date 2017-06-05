<?php
require_once('../persistencia/Persistenciaadministrador.class.php');

class administrador{

	private $idadministrador;
	private $grado;


	function __construct($a,$b)
    {
			$this->idadministrador=$a;
			$this->grado= $b;
		}

		//Metodos GET

	 public function getidadministrador()
	 {
		 return $this->idadministrador;
	 }

     public function getgrado()
    {
      return $this->grado;
    }

		//Metodos SET
		public function setidadministrador($a)
    {
      $this->idadministrador= $idadministrador;
    }

		public function setgrado($b)
    {
      $this->grado= $grado;
    }

		function alta ($conex){
	   $pu = new Persistenciaadministrador;
	   return ($pu->agregar($this,$conex));
	  }
}
?>
