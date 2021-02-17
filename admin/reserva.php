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

    div#example_length {
    margin-bottom: 20px;
    margin-top: 20px;
    margin-left: 10px;
}

aside.main-sidebar.col-12.col-md-3.col-lg-2.px-0 {
    height: 900px;
}



    li.paginate_button.active {
    margin-left: 6px;
    margin-right: 6px;
    /* margin-top: 19px; */
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
    <title>Pagina de Administração - Aqui & Agora - Listagem de Reservas</title>
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




    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/personalized.css" rel="stylesheet" type="text/css"/>

            <link rel="stylesheet" href="css/bootstrap.css">

            <link rel="stylesheet" href="css/custom.css">
  





    <style type="text/css">

    .main-sidebar .nav-wrapper {
    margin-top: -10px;

  }

  .dropdown-menu-small .dropdown-item {
    font-size: 11px!important;
  }


      
    #example thead {
    background: #000;
    color: #fff;
}

#example tfoot {
    background: #000;
    color: #fff;
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

#reservas_listas
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
                <a class="nav-link " href="index.php">
                  <i class="fas fa-hiking"></i> 
                  <span>Atividades & Localidades</span>
                </a>
              </li>
              <li class="nav-item active">
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
                <h3> Lista de Reservas Inscritos </h3>
              </div>
            </div>
        </div>





        <div class="container">
              <div class="row">

                  <div id="reservas_listas">
                      <div class="col-xs-12 col-md-12">
                            <div class="table-responsive">
                                <table id="example" class="display responsive nowrap table-striped dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                              

                                        <th>ID/Ações</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Data Reserva</th>
                                        <th>Reservas Actividades</th>
                                        <th>Numero Pessoas</th>
                                        <th>Observações</th>
                                        <th></th>
                                        
                                          
                           
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID/Ações</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Data Reserva</th>
                                        <th>Reservas Actividades</th>
                                        <th>Numero Pessoas</th>
                                        <th>Observações</th>
                                        <th></th>

                                    </tr>
                                </tfoot>
                                </table>
                              </div>
                            </div>
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

   /* getCidades();

function getCidades()
{
  var s = '';
  var s1 = '';
  $("#actividades").prop('disabled', true);


  s += '<option value ="">Escolhe a Cidade...</option>';
  s1 += '<option value ="">Escolhe a Actividade...</option>';


  $("#actividades").html(s1);
  $("#cidades").html(s);
  setTimeout(function(){ 
  dataValue='action=1';
    $.ajax({ url:'../reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
            console.log('nada');
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {               
        
        s +='<option value="'+arr[i].nome_local+'">'+arr[i].nome_local+'</option>';

      }
            
      $("#cidades").html(s);


            
            
            
          }
        },
        error:function(data){
           console.log('erro');
          }
        });
    
    }, 1000);
}


function getActividades(cidade)
{
  var s1 = '';
  $("#actividades").prop('disabled', false);

  s1 += '<option value ="">Escolhe a Actividade...</option>';


  $("#actividades").html(s1);
  setTimeout(function(){ 
  dataValue='action=2&cidade='+cidade;
    $.ajax({ url:'../reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
            console.log('nada');
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {               
        
        s1 +='<option value="'+arr[i].actividade+'">'+arr[i].actividade+'</option>';


      }
            
      $("#actividades").html(s1);

      console.log($("#actividades").val());




            
            
            
          }
        },
        error:function(data){
           console.log('erro');
          }
        });
    
    }, 1000);
}

function getIdReservaActividade(cidade, actividade)
{
  setTimeout(function(){ 
  dataValue='action=3&cidade='+cidade+'&actividade='+actividade;
  console.log(dataValue);
    $.ajax({ url:'../reserva_actividades/action_reserva.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);

          if (arr.length == null || arr.length < 1 )
          {
            
            console.log('nada');
          }
          else 
          {
            console.log(arr);
            for(i=0;i<arr.length;i++)
            {               
        $("#reserva_act_id").val(arr[0].id);

      }
            

            
            
            
          }
        },
        error:function(data){
           console.log('erro');
          }
        });
    
    }, 1000);
}*/


listarReservas();

function listarReservas()
        {
            table = $('#example').DataTable( {
            dom: "Blfrtip",
            rowId: "id",
            "paging": true,
            "serverside":true,
            order: [],
            "ajax": 
      {
        "url" : "reservas/action_datatable_reserva.php",
        "type": "GET"
      },
      columns: [
        { data: "id", render: function ( data, type, row ) {
          return data + ' <button style="margin-left: 5px;" title="Apagar '+data+'" class="btn-sm btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>';
          }},
        { data: "nome_pessoa",render: function (data, type, full)
        {
            
            return data;
            
        }},
        { data: "email" },
        { data: "data_reserva" , render: function ( data, type, row ) {
          myDate = new Date(data*1000);
          a = moment(myDate).format('DD/MM/YYYY');
          return a;
          }
        },
        { data: "id_reserva_act" },
        { data: "n_pessoas" },
        { data: "observacoes" },
        { data: "tstp", className: "hidden"}
        
      ],
      "columnDefs": [
         {"orderData": [7], "targets": [3]}
      ],
      select: 
        {
          style:    'os',
          selector: 'td:first-child'
        },
              "language": {
                "emptyTable":"Sem resultados",         
                "paginate": {
                  "first":      "Primeiro",
                  "last":       "Ultimo",
                  "next":       "Seguinte",
                  "previous":   "Anterior"
                },
                "zeroRecords": "Não tem registos",
                "loadingRecords": "A carregar...",
                "processing":     "A processar ...",
                "info": "Página nº _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registos disponiveis",
                "infoFiltered": "(filtro de _MAX_ registos totais)",
                "search" : "Pesquisar Cliente: ",
                "lengthMenu": "Mostrar _MENU_ Registos por Página"
              }


     });
}

/*
var date = new Date();
          d = date.setDate(date.getDate());
          h = date.setHours(date.getHours());
    
    // Datas usando no datetimepicker

    $("#data_reseva_dt_value").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});




$('#example tbody').on( 'click', '.btn-edit', function () {
       arr = table.row($(this).parents('tr')).data();
       $('#reserva_id').html(arr.id);
        editarLinhaReserva(arr);
        //editClientTable(arr); 
});

$('#example tbody').on( 'click', '.btn-danger', function () {
       arr = table.row($(this).parents('tr')).data();
       confirmDeleteReserva(arr.id);
  });


function editarLinhaReserva(arr)
     {
         $("#nome_reserva_value").val(arr.nome_pessoa);


         $("#email_value").val(arr.email);

         $("#data_reserva_value").val(moment(arr.data_reserva*1000).format("DD/MM/YYYY"));


         $("#reserva_act_id").val(arr.id_reserva_act);

         $("#n_pessoas_value").val(arr.n_pessoas);

         $("#observacoes_value").val(arr.observacoes);

        
        document.getElementById('editar_Reserva').style.display='block';
     }


function salvar_Reserva(vl)
{
    dataValue="action=1&id="+vl+"&nome="+$('#nome_reserva_value').val()+
    "&email="+$("#email_value").val()+"&data_reserva="+$("#data_reserva_value").val()+"&reserva_act_id="+$("#reserva_act_id").val()+"&n_pessoas="+$("#n_pessoas_value").val()+"&observacao="+$("#observacao_value").val();
    console.log(dataValue);


    $.ajax({ url:'reserva/action/action_reserva.php',
                data:dataValue,
                type:'POST',
                cache:false,
                success: function(data){



                if (data == 1) {
                        $('.debug-url').html('O Numero da Reserva <strong class="cpt">'+vl+'</strong> foi modificado com sucesso');
                        document.getElementById('success').style.display='block';
                        escritaDatatableReserva(vl);

                }
                else if (data == 0){
                        $('.debug-url').html('Reserva #<strong>'+vl+'</strong> não foi modificada!');
                        document.getElementById('warning').style.display='block';
                }
                },
                error:function(){
                        $('.debug-url').html('Reserva # <strong> ' +vl+ ' </strong> não foi modificada, p.f. verifique a ligação Wi-Fi.');
                        document.getElementById('warning').style.display='block';


                }
                });

}
*/

$('#example tbody').on( 'click', '.btn-danger', function () {
       arr = table.row($(this).parents('tr')).data();
       $('#apagar_id').html(arr.id);
       confirmDeleteReserva(arr);
  });

function confirmDeleteReserva(arr){

  document.getElementById('apagar_Reserva').style.display='block';
}

function apagar_Reserva(id)
{
  table = $('#example').DataTable();
  dataValue="action=1&id="+id;
  console.log(dataValue);

  $.ajax({ url:'reservas/action/action_reserva.php',
                data:dataValue,
                type:'POST',
                cache:false,
                success: function(data){
                  console.log(data);



                if (data == 2) {
                        document.getElementById('apagar_Reserva').style.display='none';

                        $('.debug-url').html('O Numero da Reserva <strong class="cpt">'+id+'</strong> foi apagado com sucesso');
                        document.getElementById('success').style.display='block';
                        setInterval( function () {table.ajax.reload();}, 1000 ); 

                }
                else if (data == 0){
                        $('.debug-url').html('Reserva #<strong>'+id+'</strong> não foi apagado!');

                        document.getElementById('warning').style.display='block';
                }
                },
                error:function(){
                        $('.debug-url').html('Reserva # <strong> ' +id+ ' </strong> não foi apagado, p.f. verifique a ligação Wi-Fi.');
                        document.getElementById('warning').style.display='block';


                }
                });



}





  </script>

  </body>
</html>
