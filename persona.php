<?php 
class Persona{
  public $id;  
  public $name;
  public $age;
  public $apellido;
  public $email;
 public function __construct($id,$name,$age,$apellido,$email){
    $this->id=$id;
    $this->name=$name;
    $this->age=$age;
    $this->apellido=$apellido;
    $this->email=$email;
 }

}