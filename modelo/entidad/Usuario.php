<?php
class Usuario{
    public $id;
    public $Nombre;
    public $Apellido;
    public $Email;
    public $Usuario;
    public $Password;
    public $Administrador;
    public $Estado;
	/**
	 */
	public function __construct($id,$Nombre,$Apellido,$Email,$Usuario,$Password,$Img_perfil,$Administrador,$Estado) {
        $this->id=$id;
        $this->Nombre=$Nombre;
        $this->Apellido=$Apellido;
        $this->Email=$Email;
        $this->Usuario=$Usuario;
        $this->Password=$Password;
        $this->Img_perfil=$Img_perfil;
        $this->Administrador=$Administrador;
        $this->Estado=$Estado;
	}
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->Nombre;
    }
    public function getApellido(){
        return $this->Apellido;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function getUsuario(){
        return $this->Usuario;
    }
    
    public function getPassword(){
        return $this->Password;
    }
    public function getImg_perfil(){
        return $this->Img_perfil;
    }
    public function getAdministrador(){
        return $this->Administrador;
    }
    public function getEstado(){
        return $this->Estado;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function setNombre($Nombre){
        $this->nombre = $Nombre;
        return $this;
    }
    public function setApellidos($Apellidos){
        $this->Apellidos = $Apellidos;
    }
    public function setUsuario($Usuario){
        $this->Usuario=$Usuario;
        return $this;
    }
    public function setEmail($Email){
        $this->Email=$Email;
        return $this;
    }
    public function setPassword($Password){
        $this->Password=$Password;
        return $this;
    }
    public function setImg_perfil($Img_perfil){
        $this->Img_perfil=$Img_perfil;
        return $this;
    }
    public function setAdministrador($Administrador){
        $this->Administrador=$Administrador;
        return $this;
    }
    public function setEstado($Estado){
        $this->Estado=$Estado;
        return $this;
    }
}