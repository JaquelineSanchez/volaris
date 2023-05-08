<?php


function formVuelos($tipoVuelo){
$salida = "";  
include('conexion.php');

$salida .= "<div class=\"col-md-6\">";
$salida .= "  <label for=\"origen-select\" class=\"form-label\"> <b>Origen</b></label>";
$salida .= "  <select id=\"origenVuelo".$tipoVuelo."\" class=\"form-select form-select-md\">";
$salida .= "    <option value='0' selected>Selecciona el lugar de origen</option>";
$origen = "SELECT DISTINCT(origen) FROM vuelos;";
$resultadosOrigen = mysqli_query(mysqli_connect($server, $user, $pwd, $database), $origen);
while ($valores = mysqli_fetch_array($resultadosOrigen)) {
$salida .=  '<option value=\"' . $valores["origen"] . '\">' . $valores["origen"] . '</option>';
}
$salida .= "  </select>";
$salida .= "</div>";
$salida .= "<div class=\"col-md-6\">";
$salida .= "  <label for=\"destino-select\" class=\"form-label\"><b>Destino</b></label>";
$salida .= "  <select id=\"destinoVuelo".$tipoVuelo."\" class=\"form-select form-select-md\">";
$salida .= "    <option value='0' selected>Selecciona el lugar de destino</option>";
$destinos = "SELECT DISTINCT(destino) FROM vuelos;";
$resultadosDest = mysqli_query($cnn, $destinos);
while ($valores = mysqli_fetch_array($resultadosDest)) {
$salida .= '<option value=\"' . $valores["destino"] . '\">' . $valores["destino"] . '</option>';
}
$salida .= "  </select>";
$salida .= "</div>";
  return $salida;
}
