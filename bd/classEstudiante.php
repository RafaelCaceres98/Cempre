<?php
  class Estudiante{
    private $Identificacion;
    private $Apellidos;
    private $Nombres;
    private $lugarnacimineto;
    private $fechanacimiento;
    private $genero;
    private $direccion;
    private $ciudad;
    private $correo;
    private $telefono;
    private $celular;
    private $nacionalida;
    private $estadocivil;
    
    public function __construct($Identificacion,$Apellidos,$Nombres,$lugarnacimineto,$fechanacimiento,$genero,$direccion,$ciudad,$correo,$telefono,$celular,$nacionalida,$estadocivil){

         $this ->Identificacion= $Identificacion;
         $this ->Apellidos= $Apellidos;
         $this ->Nombres= $Nombres;
         $this ->lugarnacimineto= $lugarnacimineto;
         $this ->fechanacimiento= $fechanacimiento;
         $this ->genero= $genero;
         $this ->direccion= $direccion;
         $this ->ciudad= $ciudad;
         $this ->correo= $correo;
         $this ->telefono= $telefono;
         $this ->celular= $celular;
         $this ->nacionalida= $nacionalida;
         $this ->estadocivil=$estadocivil;
    }

    public function getIdentificacion()
    {
     return $this->Identificacion;
    }

    public function setIdentificacion($Identificacion)
    {
      $this->Identificacion = $Identificacion;
      return $this;
    }

    public function getApellidos()
    {
     return $this->Apellidos;
    }

    public function setApellidos($Apellidos)
    {
      $this->Apellidos = $Apellidos;
      return $this;
    }

    public function getNombres()
    {
     return $this->Nombres;
    }

    public function setNombres($Nombres)
    {
      $this->Nombres = $Nombres;
      return $this;
    }

    public function getlugarnacimineto()
    {
     return $this->lugarnacimineto;
    }

    public function setlugarnacimineto($lugarnacimineto)
    {
      $this->lugarnacimineto = $lugarnacimineto;
      return $this;
    }

    public function getfechanacimiento()
    {
     return $this->fechanacimiento;
    }

    public function setfechanacimiento($fechanacimiento)
    {
      $this->fechanacimiento = $fechanacimiento;
      return $this;
    }

    public function getgenero()
    {
     return $this->genero;
    }

    public function setgenero($genero)
    {
      $this->genero = $genero;
      return $this;
    }

    public function getdireccion()
    {
     return $this->direccion;
    }

    public function setdireccion($direccion)
    {
      $this->direccion = $direccion;
      return $this;
    }
    
    public function getciudad()
    {
     return $this->ciudad;
    }

    public function setciudad($ciudad)
    {
      $this->ciudad = $ciudad;
      return $this;
    }

    public function getcorreo()
    {
     return $this->correo;
    }

    public function setcorreo($correo)
    {
      $this->correo = $correo;
      return $this;
    }

    public function gettelefono()
    {
     return $this->telefono;
    }

    public function settelefono($telefono)
    {
      $this->telefono = $telefono;
      return $this;
    }

    public function getcelular()
    {
     return $this->celular;
    }

    public function setcelular($celular)
    {
      $this->celular = $celular;
      return $this;
    }

    public function getnacionalida()
    {
     return $this->nacionalida;
    }

    public function setnacionalida($nacionalida)
    {
      $this->nacionalida = $nacionalida;
      return $this;
    }

    public function getestadocivil()
    {
     return $this->estadocivil;
    }

    public function setestadocivil($estadocivil)
    {
      $this->estadocivil = $estadocivil;
      return $this;
    }

    public function __toString(){
        return $this->Identificacion." ".$this->Apellidos." ".$this->Nombres." ".
         $this->lugarnacimineto." ".$this->fechanacimiento." ".$this->genero." ".
         $this->direccion." ".$this->ciudad." ".$this->correo." ".$this->telefono." ".
         $this->celular." ".$this->nacionalida." ".$this->estadocivil;
    }

    public function guardarEstudiante(){

    }

    public function obtenerEstudiante(){
        
    }

    public function actualizarEstudiante(){
        
    }

    public function eliminarEstudiante(){
        
    }
    

  }

                                                                                        

?>