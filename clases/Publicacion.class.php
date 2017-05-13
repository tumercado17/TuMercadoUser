<?php
require_once('../persistencia/PersistenciaPublicacion.class.php');

class Publicacion
{
    private $id;
    private $precio;
    private $descripcion;
    private $categoria;
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
      $pd=new PersistenciaPublicacion;
      $datos= $pd->consTodos($conex);
      return $datos;
    }

	public function consultaUno($conex)
    {
      $pd=new PersistenciaPublicacion;
      $datos= $pd->consUno($this,$conex);
      return $datos;
    }

  public function Listado()
  {
    $resultado = $pdo->query("SELECT id, precio, descripcion, categoria, stock, fecha FROM publicacion");
    while (list($id, $precio, $descripcion, $categoria, $stock, $fecha) = $resultado->fetch(PDO::FETCH_NUM))
    {
      echo " <tr>\n" .
          "  <td><a href=\"info.php?id=$id\">$precio</a></td>\n" .
          "  <td>$categoria</td>\n" .
          " </tr>\n";
    }


  }

}

?>
