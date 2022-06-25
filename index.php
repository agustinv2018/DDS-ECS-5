<?php

require_once 'modelo/cliente.php';
require_once 'modelo/marca.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$cl = new Cliente;
$cl->Id = 147852;
$cl->NombreApellido = 'Agustin Vargas';
$cl->NumeroDocumento = '36734474';

$mp = new MarcaProducto;
$mp->Id = 369852;
$mp->Descripcion = 'BAYER';
$mp->Codigo = 'N°4562255H';

$pro = new Producto;
$pro->Id = 456789;
$pro->Codigo = 'N°12355F';
$pro->Descripcion = 'Bayaspirina';
$pro->Marca = $mp;

$prov = new Proveedor;
$prov->Id = 159753;
$prov->NombreApellido = 'Gabriel Omar Batistuta';
$prov->NumeroDocumento = '20717041';
$prov->Producto = $pro;

$cl->MostrarDatos();
echo '<hr>';
$prov->MostrarDatos();

