<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/admin/connect.php';


switch ($_POST['action']){

	case '1':

	$obter_comp="SELECT * FROM reserva_actividades";
    $result = mysqli_query($conn, $obter_comp);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);

	break;

}