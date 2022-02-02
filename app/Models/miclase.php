<?php
namespace App\Models;
class miClase{
    public $nombre;
    public $habilidadUno;
    public $habilidadDos;
    public $Edad;
    public $correo;
    public $telefono;
    public $direccion;
    public function verHabilidades() 
    {
        $this->habilidad1=$habilidadUno;
        $this->habilidad2=$habilidadDos;
    }
    public function verdatosContacto()
    {
        $this->Correo=$correo;
        $this->Telefono=$telefono;
        $this->Direccion=$direccion;
    }
}
