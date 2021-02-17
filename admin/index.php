 <?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');


require_once 'connect.php';


session_start();

if(!isset($_COOKIE['user'])) {
    header("Location:login.php");
}


else{
    

//unset($_POST);


?>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>

	<style>
    
    #content_info
    {
        display: block!important;
    }
    .cont_page
    {
    	margin-top: 30px;
    }

</style>

<?php


// Altera������o dos Accessos aos Utilizadores que s���o Admin e SuperUser

if (isset($_COOKIE['access_alt_pri']) == FALSE)
{
    $pri = '';
}																										
else
{
    $pri = $_COOKIE['access_alt_pri'];
}





?>

<?php

  }

?>







<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pagina de Administração - Aqui & Agora - Listagem de Localidade, Actividades e Vagas</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker-standalone.css">
    <link rel="stylesheet" href="css/bootstrap-switch.min.css">
    <link rel="stylesheet" href="css/editor.bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/custom.css">




    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">

    .main-sidebar .nav-wrapper {
    margin-top: -10px;

  }

  .dropdown-menu-small .dropdown-item {
    font-size: 11px!important;
  }
    	
    	thead {
    background: #000;
    color: #fff;
}

aside.main-sidebar.col-12.col-md-3.col-lg-2.px-0 {
    height: 900px;
}

.main-content-container.container-fluid.px-4 {
    overflow-x: auto;
}


.table-responsive {
  min-height: 0.01%;
  overflow-x: auto;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}

#lista_actividades
{
	overflow-x: auto;
}

    </style>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="color-switcher animated">
      <h5>Cores</h5>
      <ul class="accent-colors">
        <li class="accent-primary active" data-color="primary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-secondary" data-color="secondary">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-success" data-color="success">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-info" data-color="info">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-warning" data-color="warning">
          <i class="material-icons">check</i>
        </li>
        <li class="accent-danger" data-color="danger">
          <i class="material-icons">check</i>
        </li>
      </ul>
      
      <div class="close">
        <i class="material-icons">close</i>
      </div>
    </div>
    <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons">settings</i>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 120px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Administracao</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <i class="fas fa-hiking"></i> 
                  <span>Atividades & Localidades</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="reserva.php">
                  <i class="material-icons">vertical_split</i>
                  <span>Reservas</span>
                </a>
              </li>
              
            </ul>
          </div>
        </aside>
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  	<?php if ($_COOKIE['user'] == 'Elisa'){ ?>
                    	<img class="user-avatar rounded-circle mr-2" src="images/avatars/Elisa.jpg" alt="User Avatar">
                    <?php } ?>
                    <span class="d-none d-md-inline-block"><?php echo $_COOKIE['user'] ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item text-danger" href="logout.php">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
          <div class="cont_page">
	          <div class="container">
	          	<div class="row">
	          		<h3> Lista de Atividades/Localidade e Possiveis Vagas </h3>
	          	</div>
	          </div>
	      </div>



	      <div class="container">
	          	<div class="row">
	          		<div id="lista_actividades">

	          		</div>
	          	</div>
	       </div>

	       <?php include 'modals.php'; ?>


	       
          
        </main>
      </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>

    <script src="js/select2.full.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/dataTables.colReorder.min.js"></script>
	<script src="js/bootbox.min.js"></script>
	<script src="js/momentjs/moment-with-locales.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/bootstrap-switch.min.js"></script>
	<script src="js/buttons.colVis.js"></script>
	<script src="js/buttons.print.min.js"></script>
	<script src="js/buttons.html5.min.js"></script>
	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>
	<script src="js/jszip.min.js"></script>



	<script>

	showListaActividades();

	

	function showListaActividades()
  {
      var s = "";
  dataValue="&action=1";
  $.ajax({ url:'reserva_atividades/action_reservas.php',
    data:dataValue,
    type:'POST', 
     success:function(data){
     arr=[];
     arr =  JSON.parse(data);
     //console.log(data);
    if (arr == null || arr.length < 1){
     document.getElementById('warning').style.display='block';
     $('.debug-url').html('Nao existe a Utilizadores');
    }
    else {
        
        for (i=0; i < arr.length; i++)
        {
              s += '<tr class="action-users-'+arr[i].id+'"><td scope="row"><input type="text" value="'+arr[i].id+'" id="col-1-'+arr[i].id+'" style="display: none" class="frm-item form-control" readonly="" /><font class="font-2-'+arr[i].id+'" style="color: #000">'+arr[i].id+'</font></td><td scope="row"><input type="text" value="'+arr[i].nome_local+'" id="col-2-'+arr[i].id+'" style="display: none" class="frm-item form-control" readonly=""/><font class="font-1-'+arr[i].id+'" style="color: #000">'+arr[i].nome_local+'</font></td><td><input type="text" value="'+arr[i].actividade+'" id="col-3-'+arr[i].id+'" style="display: none" class="frm-item form-control" readonly="" /><font class="font-3-'+arr[i].id+'" style="color: #000">'+arr[i].actividade+' </font></td><td><input type="number" value="'+arr[i].quant_vagas+'" id="col-4-'+arr[i].id+'" style="display: none" class="frm-item form-control" /><font class="font-4-'+arr[i].id+'" style="color: #000">'+arr[i].quant_vagas+'</font></td><td id="action-'+arr[i].id+'" style="width:100px;"><button title="Editar Utilizador - '+arr[i].id+'" class="btn btn-info btn-sm" onclick="editActFilters('+arr[i].id+')"><span class="glyphicon glyphicon-edit"></span></button></td></tr>';
      
        }

          
      
      
      
       


        $('#lista_actividades').html('<div class="table-responsive"><table class="table"><thead><tr><th>ID</th><th>Nome do Local</th><th>Actividade</th><th>Quantidade de Vagas</th><th>Accoes</th></tr></thead><tbody>'+s+'</tbody></table></div>');
  
    
    
    
    
    }
    
    

    },
    error:function(data){
      document.getElementById('warning').style.display='block';
     $('.debug-url').html('Erro ao obter os Utilizadores, p.f. verifique a ligar Wi-Fi.');
    }
  });
}

function editActFilters(id)
  {
      for (i=1; i<5; i++)
      {
          $("#col-"+i+"-"+id).css('display', 'block');
           $(".font-"+i+"-"+id).css('display', 'none');
      }
      
      $("#action-"+id).html('<button title="Submissao dos Utilizadores - '+id+'" class="btn btn-success btn-sm" onclick="saveVagaFilters('+id+')"><span class="glyphicon glyphicon-save-file"></span></button><button title="Cancelar Editar Utilizador - '+id+'" class="btn btn-default btn-sm" onclick="CancelVagaFilters('+id+')"><span class="glyphicon glyphicon-remove-sign"></span></button>');
  }

  function CancelVagaFilters(id)
  {
      for (i=1; i<5; i++)
      {
          $("#col-"+i+"-"+id).css('display', 'none');
           $(".font-"+i+"-"+id).css('display', 'block');
      }
      $("#action-"+id).html('<button title="Editar Utilizador - '+id+'" class="btn btn-info btn-sm" onclick="editActFilters('+id+')"><span class="glyphicon glyphicon-edit"></span></button>');
  }


  function saveVagaFilters(id)
  {
  	var dataValue='';
      for(i=1;i<5;i++){
        dataValue+="col_"+i+"_"+id+"="+$("#col-"+i+"-"+id).val()+"&";
      }
      dataValue+="id="+id+"&action=2";
      $.ajax({ url:'reservas/action/action_reserva.php',
    data:dataValue,
    type:'POST',
    cache:false,
    success:function(data){
     if (data == 0){
        $('.debug-url').html('Erro, ao modificar a atividade <b>'+id+'</b>!');
        document.getElementById('warning').style.display='block';
     }
    else if(data == 1){
      showListaActividades();
      $('.debug-url').html('A atividade <b>'+id+'</b> foi modificado com sucesso.');
      $("#mensagem_ok").trigger('click');
      document.getElementById('success').style.display='block';
     }
    },
    error:function(){
      $('.debug-url').html('A atividade <b>'+id+'</b> nao foi modificado, p.f. verifique a ligaПлоПлкo Wi-Fi.');
      document.getElementById('warning').style.display='block';
    }
  });
  }





	</script>

  </body>
</html>