<?php
  class Solicitud{
    private $NIT;
    private $NombreEmpresa;
    private $Ciudad;
    private $Direccion;
    private $Telefono;
    private $EmailEmpresa;
    private $ActividadEmpresa;
    private $NombrePersonaContacto;
    private $Cargo;
    private $TelefonoPersonaContacto;
    private $EmailPersonaContacto;
    private $Carrera;
    private $TipoPracticante;
    private $FuncionRealizar;
    private $Remuneracion;
    private $ValorRemuneracion;
    private $Observaciones;


    
    public function __construct($NIT, $NombreEmpresa, $Ciudad, $Direccion, $Telefono, $EmailEmpresa, $ActividadEmpresa, $NombrePersonaContacto, $Cargo, $TelefonoPersonaContacto, $EmailPersonaContacto, $Carrera, $TipoPracticante, $FuncionRealizar, $Remuneracion, $ValorRemuneracion, $Observaciones){

         $this ->NIT= $NIT;
         $this ->NombreEmpresa= $NombreEmpresa;
         $this ->Ciudad= $Ciudad;
         $this ->Direccion= $Direccion;
         $this ->Telefono= $Telefono;
         $this ->EmailEmpresa= $EmailEmpresa;
         $this ->ActividadEmpresa= $ActividadEmpresa;
         $this ->NombrePersonaContacto= $NombrePersonaContacto;
         $this ->Cargo= $Cargo;
         $this ->TelefonoPersonaContacto= $TelefonoPersonaContacto;
         $this ->EmailPersonaContacto= $EmailPersonaContacto;
         $this ->Carrera= $Carrera;
         $this ->TipoPracticante= $TipoPracticante;
         $this ->FuncionRealizar= $FuncionRealizar;
         $this ->Remuneracion= $Remuneracion; 
         $this ->ValorRemuneracion= $ValorRemuneracion;
         $this ->Observaciones= $Observaciones;
    }

    
public function getNIT() { return $this->NIT; } public function setNIT($NIT) { $this->NIT = $NIT; return $this; }
public function getNombreEmpresa() { return $this->NombreEmpresa; } public function setNombreEmpresa($NombreEmpresa) { $this->NombreEmpresa = $NombreEmpresa; return $this; }  
public function getCiudad() { return $this->ciudad; } public function setCiudad($ciudad) { $this->ciudad = $ciudad; return $this; } 
public function getDireccion() { return $this->Direccion; } public function setDireccion($Direccion) { $this->Direccion = $Direccion; return $this; } 
public function getTelefono() { return $this->Telefono; } public function setTelefono($Telefono) { $this->Telefono = $Telefono; return $this; } 
public function getEmailEmpresa() { return $this->EmailEmpresa; } public function setEmailEmpresa($EmailEmpresa) { $this->EmailEmpresa = $EmailEmpresa; return $this; } 
public function getActividadEmpresa() { return $this->ActividadEmpresa; } public function setActividadEmpresa($ActividadEmpresa) { $this->ActividadEmpresa = $ActividadEmpresa; return $this; } 
public function getNombrePersonaContacto() { return $this->NombrePersonaContacto; } public function setNombrePersonaContacto($NombrePersonaContacto) { $this->NombrePersonaContacto = $NombrePersonaContacto; return $this; } 
public function getCargo() { return $this->Cargo; } public function setCargo($Cargo) { $this->Cargo = $Cargo; return $this; } 

public function getTelefonoPersonaContacto() { return $this->TelefonoPersonaContacto; } public function setTelefonoPersonaContacto($TelefonoPersonaContacto) { $this->TelefonoPersonaContacto = $TelefonoPersonaContacto; return $this; } 
public function getEmailPersonaContacto() { return $this->EmailPersonaContacto; } public function setEmailPersonaContacto($EmailPersonaContacto) { $this->EmailPersonaContacto = $EmailPersonaContacto; return $this; } 
public function getCarrera() { return $this->Carrera; } public function setCarrera($Carrera) { $this->Carrera = $Carrera; return $this; } 
public function getTipoPracticante() { return $this->TipoPracticante; } public function setTipoPracticante($TipoPracticante) { $this->TipoPracticante = $TipoPracticante; return $this; } 
public function getFuncionRealizar() { return $this->FuncionRealizar; } public function setFuncionRealizar($FuncionRealizar) { $this->FuncionRealizar = $FuncionRealizar; return $this; } 
public function getRemuneracion() { return $this->Remuneracion; } public function setRemuneracion($Remuneracion) { $this->Remuneracion = $Remuneracion; return $this; } 
public function getValorRemuneracion() { return $this->ValorRemuneracion; } public function setValorRemuneracion($ValorRemuneracion) { $this->ValorRemuneracion = $ValorRemuneracion; return $this; } 
public function getObservaciones() { return $this->Observaciones; } public function setObservaciones($Observaciones) { $this->Observaciones = $Observaciones; return $this; } 


    public function __toString(){
        return $this->NIT." ".$this->NombreEmpresa." ".$this->ciudad." ".
         $this->Direccion." ".$this->Telefono." ".$this->EmailEmpresa." ".
         $this->ActividadEmpresa." ".$this->NombrePersonaContacto." ".$this->Cargo." ".$this->TelefonoPersonaContacto." ".$this->EmailPersonaContacto." ".$this->Carrera." ".$this->TipoPracticante." ".$this->FuncionRealizar." ".$this->Remuneracion." ".$this->ValorRemuneracion-" ".$this->Observaciones;
    }

    public function guardarSolicitud(){

    }

    public function obtenerSolicitud(){
        
    }

    public function actualizarSolitud(){
        
    }

    public function eliminarSolicitud(){
        
    }
    

  }

                                                                                        

?>