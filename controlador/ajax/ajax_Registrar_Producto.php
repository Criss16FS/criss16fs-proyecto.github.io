<?php
session_start();
require_once(__DIR__ ."/../mdb/mdbProducto.php");
//require_once(__DIR__ ."/../../modelo/entidad/Producto.php");

$Nombre = filter_input(INPUT_POST,'Nombre');
$Descripcion = filter_input(INPUT_POST,'Descripcion');
$imagen = filter_input(INPUT_POST,'imagen');
$Stock = filter_input(INPUT_POST,'Stock');
$Vendidos = filter_input(INPUT_POST,'Vendidos');
$Valor = filter_input(INPUT_POST,'Valor');

$Producto=new Producto(NULL,$Nombre,$Descripcion,$imagen,$Stock,$Vendidos,$Valor);
$estado= Registrar_Producto($Producto);
if ($estado!=0){
    $msg="Producto registrado exitosamente";
}else{
    $msg="Error al Registrar";
}

$result=[
    'estado'=>$estado,
    'msg'=>$msg
];

echo json_encode($result);

