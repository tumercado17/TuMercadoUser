<?php
Require_once('../persistencia/persistenciaPublicacion.class.php');
class Publicacion
{
    public $id;
    public $precio;
    public $descripcion;
    public $categoria;
    public $stock;
    public $fecha;
    public $tipo;


    function __construct($a='',$b='',$c='',$d='',$e='',$f='',$n='',$t='',$o='')
    {
    	  $this->id= $a;
        $this->precio= $b;
        $this->descripcion= $c;
        $this->categoria= $d;
        $this->stock= $e;
        $this->fecha= $f;
        $this->nombre=$n;
        $this->tipo=$t;
        $this->orden=$o;

    }

    //Métodos set

    public function setid($a)
    {
      $this->id= $a;
    }


    public function setPrecio($b)
    {
      $this->precio= $b;
    }


    public function setDescripcion($c)
    {
      $this->descripcion= $c;
    }

    public function setCategoria($d)
    {
      $this->categoria= $d;
    }

    public function setStock($e)
    {
      $this->stock= $e;
    }

    public function setFecha($f)
    {
      $this->fecha= $f;
    }

    public function setNombre($n)
    {
      $this->nombre= $n;
    }

    public function setTipo($t)
    {
      $this->tipo= $t;
    }

    public function setOrden($t)
    {
      $this->orden= $o;
    }


    //Métodos get

    public function getid()
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

    public function getNombre()
    {
      return $this->nombre;
    }

    public function getTipo()
    {
      return $this->tipo;
    }

    public function getOrden()
    {
      return $this->orden;
    }

    //Funciones de la clase publicacion

    function crea($conex){
      $obj = new persistenciaPublicacion;
      return $obj->crear($this,$conex);



    }

    function buscarPubl($conex){
      $obj = new persistenciaPublicacion;
      return $obj->buscarPubl($this,$conex);
    }

    function listapersonal(){

    }

    function modifica(){

    }

    function borra(){

    }

    function estado(){

    }

    function favorito(){

    }


}
?>
