<style>



#warning h2 {
    color: #fff;
}

#success h2
{
  color: #fff;
}

#editar_Reserva
{
  z-index: 10000;
}

#apagar_Reserva
{
  z-index: 10000;
}

#warning, #success {
    z-index: 100000;
}

select.form-control.input-sm {
    height: 35px!important;
}


p {
    margin-bottom: 1.75rem;
    margin-top: 1.75rem;
}

footer.w3-container.w3-black {
    padding: 10px;
}


@media (min-width: 601px)
{
.w3-col.m6, .w3-half {
    width: 49.99999%;
    padding: 10px;
}

}


.w3-modal {
    padding-top: 50px;
    padding-bottom: 50px;
}



</style>


<div id="warning" class="w3-modal">
        <div class="w3-modal-content">
          <header class="w3-container w3-red"> 
            <span onclick="document.getElementById('warning').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2>Aviso</h2>
          </header>
          <div class="w3-container">
            <p class="debug-url"></p>
          </div>
          <footer class="w3-container w3-red">
              <p style='text-align:center; margin:0;'><img src="logo/aa.png" style="width:120px;"></p>

          </footer>
        </div>
      </div>



      <div id="success" class="w3-modal">
        <div class="w3-modal-content">
          <header class="w3-container w3-teal"> 
            <span onclick="document.getElementById('success').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2>Sucesso</h2>
          </header>
          <div class="w3-container">
            <p class="debug-url"></p>
          </div>
          <footer class="w3-container w3-teal">
              <p style='text-align:center; margin:0;'><img src="logo/aa.png" style="width:120px;"></p>
          </footer>
        </div>
      </div>


      <div id="editar_Reserva" class="w3-modal">
        <div class="w3-modal-content">
          <header class="w3-container w3-black"> 
            <span onclick="document.getElementById('editar_Reserva').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2><span class="glyphicon glyphicon-edit" style="color: #5bc0de; font-size: 25px;"></span> Reserva Numero <font id="reserva_id"></font></h2>
          </header>
          <div class="w3-container">
            <div class="w3-col m6 s12">
            <div class="form-group">
                        <i class="fas fa-book"></i> - <label for="modelo">Nome:</label>
                        <input type="text" class="form-control" id="nome_reserva_value" readonly="readonly">
                      </div>
            </div>

            <div class="w3-col m6 s12">
            <div class="form-group">
                        <i class="fas fa-user"></i> - <label for="modelo">Email :</label>
                        <input type="text" class="form-control" id="email_value">
                      </div>
            </div>

            <div class="w3-col m6 s12">
            <div class="form-group">
                      <span class="glyphicon glyphicon-calendar"></span> Data de Reserva:
                      <div class='input-group date' id='data_reseva_dt_value'>
                          <input type='text' readonly class="form-control" name="data_reserva_value" id="data_reserva_value" placeholder="Data de Reserva" />
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
              </div>


              <div class="w3-col m6 s12">
                        <div class="form-group">
                            <i class="fas fa-flag"></i> - <label for="localidade">Localidade:</label>
                            <select class="form-control" name="cidades" id="cidades" onchange="getActividades(this.value);" style="height: 28px;">
                </select>
                          </div>

            </div>

            <div class="w3-col m12 s12">
                        <div class="form-group">
                            <i class="fas fa-hiking"></i> - <label for="actividades">Actividades:</label>
                            <select class="form-control" id="actividades" name="actividades" onchange="getIdReservaActividade($('#cidades').val(), this.value);" style="height: 28px;">
                              
                            </select>
                          </div>

                      </div>


              <div class="w3-col m12 s12">
              <div class="form-group">
                              <i class="fas fa-male"></i> - <label for="actividades">Numero de Pessoas:</label>
                              <input type="number" class="form-control" name="n_pessoas_value" id="n_pessoas_value" placeholder="Numero de Pessoas">
                            </div>
                          </div>

              <div class="w3-col m12 s12">
                        <div class="form-group">
                            <i class="fas fa-file"></i> - <label for="modelo">Comentario:</label>
                            <textarea class="form-control" rows="5" name="observacoes_value" id="observacoes_value" placeholder="Deixa a tua opinião"></textarea>
                          </div>
                      </div>



              <input type="hidden" id="reserva_act_id">
          </div>
          <footer class="w3-container w3-black">

            <button type="button" class="btn btn-default" onclick="document.getElementById('editar_Reserva').style.display='none'" style="float: right; "><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="salvar_Reserva($('#reserva_id').html())" style="float: right; margin-right: 10px;"> <span class="glyphicon glyphicon-save-file" ></span><font class="hidden-xs"> Guardar</font></button>
          </footer>
        </div>
      </div>


<div id="apagar_Reserva" class="w3-modal">
        <div class="w3-modal-content">
          <header class="w3-container w3-black"> 
            <span onclick="document.getElementById('apagar_Reserva').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2><span class="glyphicon glyphicon-trash" style="color: red; font-size: 25px;"></span> Apagar Reserva </h2> 
          </header>
          <div class="w3-container">


            <p>Tem a cereteza que deseja apagar a Reserva <font id="apagar_id"></font></p>
          </div>
          <footer class="w3-container w3-black">

            <button type="button" class="btn btn-default" onclick="document.getElementById('apagar_Reserva').style.display='none'" style="float: right; "><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-danger" onclick="apagar_Reserva($('#apagar_id').html())" style="float: right; margin-right: 10px;"> <span class="glyphicon glyphicon-trash" ></span><font class="hidden-xs"> Apagar</font></button>
          </footer>
        </div>
      </div>




