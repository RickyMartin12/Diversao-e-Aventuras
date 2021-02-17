<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/admin/connect.php';


switch ($_POST['action']){

  
    case '1':

    $reg_del= "DELETE FROM reserva_pessoa WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 
    }
    else {
      echo 0;
    }

    break;

    case '2':

    $id = $_POST['id'];
   	$n_pessoas = $_POST['col_4_'.$id];

   	$sql ="UPDATE reserva_actividades SET quant_vagas = $n_pessoas WHERE id = $id";

   	$result = mysqli_query($conn,$sql);
    if ($result)
    {
        echo 1;
    }
        
    else  
    {
        echo 0;
    }






    break;

}