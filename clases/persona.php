<?php

require_once('../persistencia/persistenciaPersona.class.php');

class Persona{

    private $ci;
    private $nombre;
    private $apellido;
    private $email;
    private $pais;
    private $tarjeta;
    private $calificacion;
    private $calle;
    private $numero;
    private $telefono;
    private $contrasena;


    function __construct($a='',$b='',$c='',$d='',$e='',$f='',$g='',$h='',$i='',$j='',$k='')
    {
    	  $this->ci= $a;
        $this->nombre= $b;
        $this->apellido= $c;
        $this->email= $d;
        $this->pais= $e;
        $this->tarjeta= $f;
        $this->calificacion= $g;
        $this->calle= $h;
        $this->numero= $i;
        $this->telefono= $j;
        $this->contrasena= $k;

    }


    //Métodos set

    public function setCi($a)
    {
      $this->ci= $a;
    }

    public function setnombre($b)
    {
      $this->nombre= $b;
    }

    public function setapellido($c)
    {
      $this->apellido= $c;
    }

    public function setemail($d)
    {
      $this->email= $d;
    }

    public function setpais($e)
    {
      $this->pais= $e;
    }

    public function settarjeta($f)
    {
      $this->tarjeta= $f;
    }

    public function setcalificacion($g)
    {
      $this->calificacion= $g;
    }

    public function setcalle($h)
    {
      $this->calle= $h;
    }

    public function setnumero($i)
    {
      $this->numero= $i;
    }

    public function settelefono($j)
    {
      $this->telefono= $j;
    }

    public function setcontrasena($k)
    {
      $this->contrasena= $k;
    }

    //Métodos get

    public function getCi()
    {
      return $this->ci;
    }

    public function getnombre()
    {
      return $this->nombre;
    }

    public function getapellido()
    {
      return $this->apellido;
    }

    public function getemail()
    {
      return $this->email;
    }

    public function getpais()
    {
      return $this->pais;
    }

    public function gettarjeta()
    {
      return $this->tarjeta;
    }

    public function getcalificacion()
    {
      return $this->calificacion;
    }

    public function getcalle()
    {
      return $this->calle;
    }

    public function getnumero()
    {
      return $this->numero;
    }

    public function gettelefono()
    {
      return $this->telefono;
    }

    public function getcontrasena()
    {
      return $this->contrasena;
    }

    //Funciones de la clase Persona

    public function alta ($conex){
	        $pu = new persistenciaPersona;
	        return $pu->agregar($this,$conex);
	  }

    //Funcion para hacer el login
     public function loginusu($conex){
          $pu = new persistenciaPersona;
          return $pu->entrarusu($this,$conex);
     }

     public function getFacturacion($conex){
          $pu = new persistenciaPersona;
          return $pu->getFact($this,$conex);
     }

     public function getRep($conex){
          $pu = new persistenciaPersona;
          return $pu->getRep($this,$conex);
     }
   }

?>
