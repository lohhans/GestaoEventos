@extends('layout.templateDetalhamentoEvento')

@section('content')

<section class="form-gradient mb7">
    <!-- Basic dropdown -->

    <!-- Espaçamento entre a navbar e o conteudo -->

    <div class="container">
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>

        <div class="row">
            <div class="col-md-3">
                <!-- <div id="piechart" style="width: 450px; height: 250px;"></div> -->
                <div id="donutchart" style="width: 450px; height: 250px;"></div>
            </div>
            <div class="col-md-9">
                <form action="/atualizar/evento" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="labelLocalizacao" class="col-md-4 col-form-label text-md-right">{{ __('Localização') }}</label>

                        <div class="col-md-8">
                            <input id="localizacao" value = "{{ $evento->localizacao }}" type="text" class="form-control" name="localizacao" required autofocus disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labelDescricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                        <div class="col-md-8">
                            <input id="descricao" value = "{{ $evento->descricao }}"  type="text" class="form-control" name="descricao" required autofocus disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labelDataInicio" class="col-md-4 col-form-label text-md-right">{{ __('Data Inicio') }}</label>

                        <div class="col-md-8">
                            <input id="dataInicio" type="date" value="{{ date('d / m / Y', strtotime($evento->dataInicio)) }}" class="form-control" name="dataInicio" required autofocus disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="labelDataFim" class="col-md-4 col-form-label text-md-right">{{ __('Data Fim') }}</label>

                        <div class="col-md-8">
                            <input id="dataFim" type="text" value="{{ date('d / m / Y', strtotime($evento->dataFim)) }}" class="form-control" name="dataFim" required autofocus disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="labelDataFim" class="col-md-4 col-form-label text-md-right">{{ __('Área') }}</label>
                        <div class="col-md-8" value = "$evento->area">
                            <select class="form-control" id="areaEvento" name="area_id" disabled>
                                <option value="{{ $evento->id }}">{{ $evento->area->descricao }}</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <input id="id" value = "{{ $evento->id }}" type="hidden" class="form-control" name="id">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div>
                            <button id="botaoAlterarEvento" type="button" onclick="alterarInformacoesEvento()" class="btn btn-primary">
                                {{ __('Alterar Informações') }}
                            </button>
                            <button id="botaoSalvar" class="btn btn-primary" type="submit" disabled>
                                {{ __('Salvar') }}
                            </button>
                        </div>
                    </form>
                        <form action="/deletar/evento" method="post" id="teste">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div>
                                <input id="id" value = "{{ $evento->id }}" type="hidden"  name="evento_id">
                            </div>
                             <div>
                                 <button id="botaoCancelarEvento" class="btn btn-primary" type="button" onclick="event.preventDefault();if(confirm('O evento possui {{ $qtdIncricoes }} incrições. Tem certeja que deseja cancelar este evento? O cancelamento acarretará em possiveis solicitações de reembolso')){document.getElementById('teste').submit();}">
                                {{ __('Cancelar Evento') }}
                                </button>
                            </div>
                        </form>

                    </div>


            </div>
        </div>
        </br>
        </br>
        </br>
        <!-- <div id="donutchart" style="width: 450px; height: 250px;"></div> -->
        <div class="row">
            <ul class="list-group col-md-5" style="min-height: 400px; max-height: 400px; margin-bottom: 10px; overflow:scroll;
                                                -webkit-overflow-scrolling: touch;">

                <div class="row">

        			<div class="col-md-1"></div>
        			<div class="col-md-11">
        				<div class="card">
        					<div class="card-header">Atividades do evento {{$evento->descricao}}</div>
        					<table class="table">
        					  	<thead>
        						    <tr>
        						      <th scope="col">#</th>
        						      <th scope="col">Descricao Atividade</th>
        						      <th scope="col">Valor</th>

        						    </tr>
        						  </thead>
        				  		<tbody>
        							<?php
        							$i = 0;
        					  			foreach($atividades as $atividade){
        									$i++;
        					  		?>
        						    <tr>
        						      <th scope="row"><?php echo $i ?></th>
        							  <td><?php echo $atividade->descricao ?></td>
        							  <td><?php echo $atividade->valor ?></td>

        						    </tr>
        							<?php
        							}
        							?>

        					  	</tbody>
        					</table>
        				</div>
        			</div>
        			<div class="col-md-2"></div>
        		</div>
            </ul>
            <div class="col-md-1"></div>
            <ul class="list-group col-md-5" style="min-height: 400px; max-height: 400px; margin-bottom: 10px; overflow:scroll;
                                                -webkit-overflow-scrolling: touch;">


        			<div class="col-md-1"></div>
        			<div class="col-md-11">
        				<div class="card">
        					<div class="card-header">Vouchers do evento {{$evento->descricao}}</div>
        					<table class="table">
        					  	<thead>
        						    <tr>
        						      <th scope="col">#</th>
                                      <th scope="col">Código Identificador</th>
                                      <th scope="col">Descricao Voucher</th>
        						      <th scope="col">Percentual Desconto</th>
                                      <th scope="col">Limite Maximo de Uso</th>

        						    </tr>
        						  </thead>
        				  		<tbody>
        							<?php
        							$i = 0;
        					  			foreach($vouchers as $voucher){
        									$i++;
        					  		?>
        						    <tr>
        						      <th scope="row"><?php echo $i ?></th>
                                      <td><?php echo $voucher->codigoIdentificador ?></td>
                                      <td><?php echo $voucher->descricao ?></td>
                                      <td><?php echo $voucher->percentual ?></td>
                                      <td><?php echo $voucher->limite ?></td>


        						    </tr>
        							<?php
        							}
        							?>

        					  	</tbody>
        					</table>
        				</div>
        			</div>
        			<div class="col-sm-2"></div>
        		</div>
            </ul>
        </div>


    <!-- pizza -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Confirmados', 'Pendentes'],
          ['Pago',     11],
          ['Aberto',      2],

        ]);

        var options = {
          title: 'Inscrições'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <!-- donut -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Valor Pendente', 'Valor Pago'],
          ['Pendente',     11],
          ['Pago',      20],
        ]);

        var options = {
          title: 'Faturamento',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
        function alterarInformacoesEvento () {
            if(document.getElementById('localizacao').disabled) document.getElementById('localizacao').disabled=false;
            if(document.getElementById('descricao').disabled) document.getElementById('descricao').disabled=false;
            if(document.getElementById('dataFim').disabled) document.getElementById('dataFim').disabled=false;
            if(document.getElementById('dataInicio').disabled) document.getElementById('dataInicio').disabled=false;
            if(document.getElementById('areaEvento').disabled) document.getElementById('areaEvento').disabled=false;
            if(document.getElementById('botaoSalvar').disabled) document.getElementById('botaoSalvar').disabled=false;
            if(document.getElementById('botaoSalvar').disabled) document.getElementById('botaoSalvar').disabled=false;
            if(!document.getElementById('botaoSalvar').disabled) document.getElementById('botaoAlterarEvento').disabled=true;
            if(!document.getElementById('botaoCancelarEvento').disabled) document.getElementById('botaoCancelarEvento').disabled=true;
        }

        function funcao1()
        {
            var confirmacaoCancelamento = confirm("O evento possui X incrições. Tem certeja que deseja cancelar este evento? O cancelamento acarretará em possiveis solicitações de reembolso");
            $.ajax({

                url: '{{route("login")}}',
                data: {'rel':dataUser},
                type: "GET",
                success: function (e)
                {
                    console.log(e);
                }
           });
        }
</script>


</section>
@endsection
