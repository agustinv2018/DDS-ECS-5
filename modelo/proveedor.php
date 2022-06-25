<?php

class Proveedor
{
    public $Id;
    public $NombreApellido;
    public $NumeroDocumento;
    public $Producto;

    public function MostrarDatos()
    {
        echo 'Id Proveedor: ' . $this->Id . '<br>';
        echo 'Nombre y Apellido del  Proveedor: ' . $this->NombreApellido . '<br>';
        echo 'Numero de Documento del Proveedor: ' . $this->NumeroDocumento . '<br>';
        echo 'Datos del Producto:' . '<br>';
        echo 'Id del Producto: ' . $this->Producto->Id . '<br>';
        echo 'Codigo del Producto: ' . $this->Producto->Codigo . '<br>';
        echo 'Descripcion del Producto: ' . $this->Producto->Descripcion . '<br>';
        echo 'Datos de la Marca del Producto: ' . '<br>';
        echo 'Id de la Marca del Producto: ' . $this->Producto->Marca->Id . '<br>';
        echo 'Descripcion de la Marca del Producto: ' . $this->Producto->Marca->Descripcion . '<br>';
        echo 'Código de la Marca del Producto: ' . $this->Producto->Marca->Codigo . '<br>';
        
    }
}
