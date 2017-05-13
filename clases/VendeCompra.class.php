<?php
require_once('../persistencia/PersistenciaVendeCompra.class.php');

class VendeCompra
{
    private $id;
    private $precio;
    private $descripcion;
    private $cantidad;
    private $stock;
    private $fecha;

    function __construct($i='',$p='',$d='',$c='',$s='',$f='')
    {
        $this->id= $i;
        $this->precio= $p;
        $this->descripcion= $d;
        $this->categoria=$c;
        $this->stock=$s;
        $this->fecha=$f;
    }

    //M�todos set

    public function setId($i)
    {
      $this->id= $i;
    }

	  public function setPrecio($p)
    {
      $this->precio= $p;
    }

    public function setDescripcion($d)
    {
      $this->descripcion= $d;
    }

	  public function setCategoria($c)
    {
      $this->categoria= $c;
    }

    public function setStock($s)
    {
      $this->stock= $s;
    }

	  public function setFecha($f)
    {
      $this->fecha= $f;
    }

    //M�todos get

    public function getId()
    {
      return $this->id;
    }

  	public function getPrecio()
    {
      return $this->precio;
    }

    public function getDescripcion()
    {
      return $this->descripcion;
    }

  	public function getCategoria()
    {
      return $this->categoria;
    }

    public function getStock()
    {
      return $this->stock;
    }

  	public function getFecha()
    {
      return $this->fecha;
    }

    //Otros M�todos


    public function consultaTodos($conex)
    {
      $pd=new PersistenciaVendeCompra;
      $datos= $pd->consTodos($conex);
      return $datos;
    }

	public function consultaUno($conex)
    {
      $pd=new PersistenciaVendeCompra;
      $datos= $pd->consUno($this,$conex);
      return $datos;
    }

}

?>
