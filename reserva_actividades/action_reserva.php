<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/connect.php';

include $_SERVER['DOCUMENT_ROOT'] . '/web/mpdf/mpdf.php';
$img1 = $_SERVER['DOCUMENT_ROOT'].'/web/logo/logo_ico.png';
$img_title = $_SERVER['DOCUMENT_ROOT'].'/web/logo/logo_ico.png';
$img_reserva = $_SERVER['DOCUMENT_ROOT'].'/web/icons/agenda.svg';
$img_logo = $_SERVER['DOCUMENT_ROOT'].'/web/icons/user.png';
$img_trv = $_SERVER['DOCUMENT_ROOT'].'/web/icons/travel.png';
$img_res = $_SERVER['DOCUMENT_ROOT'].'/web/icons/open-book.png';
$img_com = $_SERVER['DOCUMENT_ROOT'].'/web/icons/com.png';

switch ($_POST['action']){

	case '1':

    $obter_comp=" SELECT DISTINCT nome_local FROM reserva_actividades";
    $result = mysqli_query($conn, $obter_comp);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);

    break;

    case '2':

    $cidade = $_POST['cidade'];

    $obter_comp=" SELECT actividade FROM reserva_actividades WHERE nome_local = '$cidade' ";
    $result = mysqli_query($conn, $obter_comp);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);

    break;


    case '3':

    $cidade = $_POST['cidade'];
    $actividade = $_POST['actividade'];

    $obter_comp=" SELECT id FROM reserva_actividades WHERE nome_local = '$cidade' AND actividade = '$actividade' ";
    $result = mysqli_query($conn, $obter_comp);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);

    break;

    case '4':

    $err='';

    $nome = $_POST['nome'];

    // Modelo
        if ($nome == "")
        {
            $err .= "- Nome da Pessoa <span class='w3-text-red'> * </span><br>"; 
        }

    //Email
    $email= $_POST['email'];

    if ($email == "")
    {
        $err .= "- Email da Pessoa <span class='w3-text-red'> * </span><br>"; 
    }
    else
    {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
        {
             $email = $_POST["email"];
          } 
          else 
          {
            $err .= "- Correio Electrónico (Email) inválido<span class='w3-text-red'> *</span><br>";
          }
    }

    // Data de Reserva
    $d = $_POST['data_reserva'];

    if ($d == "")
      $err .= "- Data de Reserva <span class='w3-text-red'> *</span><br>";
    else{
      $date_array=explode('/',trim($d));
      $data_reserva=strtotime($date_array[2].'-'.$date_array[1].'-'.$date_array[0].'-00'); 
    }



    $id_reserva_actividade = $_POST['id_reserva_actividade'];

    if ($id_reserva_actividade == "")
    {
        $err .= "- Localidade e Actividade da Reserva <span class='w3-text-red'> * </span><br>"; 
    }

    //Numero de Pessoas
    if (!$_POST['n_pessoas'])
    {
        $err .= "- Numero de Pessoas <span class='w3-text-red'> * </span><br>"; 
    }
    else
    {
        if ($_POST["n_pessoas"])
      {
        if (is_numeric($_POST["n_pessoas"]) && $_POST["n_pessoas"] >= 0)
        {
            $n_pessoas = $_POST['n_pessoas'];
        }
        else
        {
          $err .= "- O Numero de Pessoas deve ser um numero e tem que ser maior que 1 <span class='w3-text-red'> *</span><br>";
        }   
      }
    }

    $observacao = $_POST['observacao'];
    
    if ($observacao == '')
    {
        $observacao = '-/-';
    }

    $localidade = $_POST['localidade'];

    $actividade = $_POST['actividade'];


    if (!$err) 
    {

        $sql =" INSERT INTO reserva_pessoa (nome_pessoa, email, data_reserva, id_reserva_act, n_pessoas, observacoes) VALUES ('$nome','$email', $data_reserva, $id_reserva_actividade, $n_pessoas, '$observacao')";

        $sql2 = mysqli_query($conn, "SELECT quant_vagas FROM reserva_actividades WHERE id = $id_reserva_actividade");
        $exibe = mysqli_fetch_assoc($sql2);
        $quant_vagas = $exibe['quant_vagas']; 


        if ($n_pessoas <= $quant_vagas)
        {
            $result = mysqli_query($conn,$sql);
            if ($result) 
            {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
            }  
            else 
            {
                $response = 0;
                $last_id = 0; 
            }

            $r=array('error'=>'','success' => $response,'id' => $last_id, 'email' => $email);
            echo json_encode($r);


            $html = '
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    .title-black-white {
        background: RGB(12,12,12);
        color: #FFF!important;
    }
    .right {
        float: right;
        width: 68px;
        position: absolute;
        padding: 10px;
      }
      .botm
      {
        margin-bottom: 40px;
      }
      .center {
        display: block;
        margin-left: 280px;
        margin-right: 280px;
        right: 100px;
      }
      .line-bord {
        border: 1px solid RGB(12,12,12);
    }
    .mylabel {
        color: #333;
        background: #87CEEB !important;
    }
    .align_div {
        margin-bottom: 15px;
    }
    .w3-padding-8 {
        padding-top: 8px!important;
        padding-bottom: 8px!important;
    }
    .w3-card-2, .w3-example {
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
    }
    .bolder
    {
        font-weight:bold;
    }
    </style>

    <img src="'.$img1.'" class="center">
    <div class="botm"></div>
    <h3 style="text-align: center;" class="bolder"> Aqui & Agora - Conteudo da Reserva '.$last_id.'</h3>
    <div class="botm"></div>
    <div class="line-bord">
    <img src="'.$img_title.'" class="right">
    <div class="modal-header title-black-white">
        <h4 class="modal-title bolder" style="color: #fff;"><img src="'.$img_reserva.'" class="img-responsive"> Reserva Numero '.$last_id.'</h4> 
    </div>
    <div class="form-horizontal" id="form">
    <div class="panel-body" style="padding: 16px; margin-top: -10px;">
    <h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div bolder"> 
    <img src="'.$img_logo.'" class="img-responsive">&nbsp;&nbsp;Detalhes Pessoais
    </h5>
    <div class="container">
    <div class="row">

    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder">Nome da Pessoa:</font> '.$nome.'
    </div>
    </div>

    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder" >Email:</font> '.$email.'
    </div>
    </div>

    <h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div bolder"> 
    <img src="'.$img_res.'" class="img-responsive">&nbsp;&nbsp;Marcação da Reserva
    </h5>

    <div class="container">
    <div class="row">

    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder">Data de Reserva:</font> '.$d.'
    </div>
    </div>

    </div>
    </div>


    <h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div bolder"> 
    <img src="'.$img_trv.'" class="img-responsive">&nbsp;&nbsp;Detalhes da Actividade da Localidade Adequada
    </h5>

    <div class="container">
    <div class="row">

    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder">Localidade:</font> '.$localidade.'
    </div>
    </div>


    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder">Actividade:</font> '.$actividade.'
    </div>
    </div>

    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder">Numero de Pessoas:</font> '.$n_pessoas.'
    </div>
    </div>

    </div>
    </div>



    <h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div bolder"> 
    <img src="'.$img_com.'" class="img-responsive">&nbsp;&nbsp;Comentarios Finais
    </h5>

    <div class="container">
    <div class="row">

    <div class="col-xs-12 col-md-6">
    <div class="form-group">
    <font class="bolder">Comentarios Finais:</font> '.$observacao.'
    </div>
    </div>


    </div>
    </div>


    </div>
    </div>






    </div>
    </div>

    </div>

    <br>
    Cumprimentos
    <br>
    Elisa Dias - Administração Aqui & Agora

    ';

        $mpdf=new mPDF();
        $mpdf->WriteHTML($html);

        $pdfdoc = $mpdf->Output("", "S");
        $attachment = chunk_split(base64_encode($pdfdoc));

        $separator = md5(time());
        $eol = PHP_EOL;

        $attachment = chunk_split(base64_encode($pdfdoc));
        $filename = "Reserva - ".$last_id." .pdf";

        $to = "r.peleira@hotmail.com";

            $headers  = "From: ".$to.$eol;
            $headers .= "MIME-Version: 1.0".$eol; 
            $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

            $info_client =
            "<div style='width:95%; margin-left:2.5%;'>
            <h4>Foi Mandado o seguinte PDF as informacoes da reserva adicionada $nome com o email $email</h4>
            </div>";

            $info_c = utf8_decode("Boas $email, os detalhes foram enviados com sucesso");

            $body_c = "--".$separator.$eol;
            $body_c .= "Content-Transfer-Encoding: 7bit".$eol.$eol;
            $body_c .= $eol;

            $body_c .= "--".$separator.$eol;
            $body_c .= "Content-Type: text/html; charset=\"UTF-8\"".$eol;
            $body_c .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
            $body_c .= $info_client.$eol;
            $body_c .= "--".$separator.$eol;
            $body_c .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol; 
            $body_c .= "Content-Transfer-Encoding: base64".$eol;
            $body_c .= "Content-Disposition: attachment".$eol.$eol;
            $body_c .= $attachment.$eol;
            $body_c .= "--".$separator."--";

            mail($email,$info_c,$body_c,$headers);
        }
        else
        {
            echo 100;
        }
            
        





    }
    else
    {
        $r = array('error' =>$err, 'success' =>'','id' =>'', 'email' => $email);
        echo json_encode($r);
    }






    break;

    case '5':


    $num = $_POST['num'];
    $id_reserva_actividade = $_POST['id_reserva_actividade'];

    $sql2 = mysqli_query($conn, "SELECT quant_vagas FROM reserva_actividades WHERE id = $id_reserva_actividade");
        $exibe = mysqli_fetch_assoc($sql2);
        $quant_vagas = $exibe['quant_vagas']; 



        $sql = "UPDATE reserva_actividades SET quant_vagas = quant_vagas - $num WHERE id = $id_reserva_actividade";


        $sql2 = mysqli_query($conn, "SELECT quant_vagas FROM reserva_actividades WHERE id = $id_reserva_actividade");
        $exibe = mysqli_fetch_assoc($sql2);
        $quant_vagas = $exibe['quant_vagas'];

        if ($quant_vagas <= 0)
        {
            echo 100;
        }

        

        $result = mysqli_query($conn,$sql);
        if ($result)
            echo 1;
        else  
            echo 0;

    

        

    break;

}
