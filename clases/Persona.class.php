<?php
require_once('../persistencia/PersistenciaPersona.class.php');

class Persona
{
    private $id;
    private $nombre;  
    private $idDepto;

    function __construct($i='',$n='',$d='')
    {
        $this->id= $i;
        $this->nombre= $n;
        $this->idDepto= $d;
    
    }
    
    //Métodos set
    
    public function setId($i)
    {
      $this->id= $i;
    }
    
     
	public function setNombre($n)
    {
      $this->nombre= $n;
    }
    
    public function setIdDepto($d)
    {
    	$this->idDepto= $d;
    }
    //Métodos get
    
    public function getId()
    {
      return $this->id;
    }
    
   
    
  	public function getNombre()
    {
      return $this->nombre;
    }
    
    public function getIdDepto()
    {
    	return $this->idDepto;
    }
    
    //Otros Métodos

    
    public function consultaTodos($conex)
    {
      $pp=new PersistenciaPersona;
      $datos= $pp->consTodos($conex);
      return $datos;
    }
    
	public function consultaUno($conex)
    {
      $pp=new PersistenciaPersona;
      $datos= $pp->consUno($this,$conex);
      return $datos;
    }
    
    public function consultaXdepto($conex)
    {
    	$pp=new PersistenciaPersona;
    	$datos= $pp->consXdepto($this,$conex);
    	return $datos;
    }
  
}

?>
