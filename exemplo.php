


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<select class="form-control" id="cidades" onchange="getActividades(this.value);">
</select>

<select class="form-control" id="actividades" onchange="getIdReservaActividade($('#cidades').val(), this.value);">
</select>

<input type="hidden" id="id_reserva_actividade">


  
<script>


getCidades();

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
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
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
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
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
    $.ajax({ url:'../web/reserva_actividades/action_reserva.php',
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
				$("#id_reserva_actividade").val(arr[0].id);

			}
						

            
            
            
          }
        },
        error:function(data){
           console.log('erro');
       		}
        });
    
    }, 1000);
}

</script>

</body>
</html>
