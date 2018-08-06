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
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>

        <div id="piechart" style="width: 400px; height: 200px; position: absolute; left: 25%; top:25%"></div>
        <div id="donutchart" style="width: 400px; height: 200px; position: absolute; left: 50%; top:25%"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <form action="/atualizar/evento" method="post">
            @csrf

            <div class="form-group row">
                <label for="labelLocalizacao" class="col-md-4 col-form-label text-md-right">{{ __('Localização') }}</label>

                <div class="col-md-6">
                    <input id="localizacao" value = "{{ $evento->localizacao }}" type="text" class="form-control" name="localizacao" required autofocus disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="labelDescricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                <div class="col-md-6">
                    <input id="descricao" value = "{{ $evento->descricao }}"  type="text" class="form-control" name="descricao" required autofocus disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="labelDataInicio" class="col-md-4 col-form-label text-md-right">{{ __('Data Inicio') }}</label>

                <div class="col-md-6">
                    <input id="dataInicio" type="date" value="{{ date('d / m / Y', strtotime($evento->dataInicio)) }}" class="form-control" name="dataInicio" required autofocus disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="labelDataFim" class="col-md-4 col-form-label text-md-right">{{ __('Data Fim') }}</label>

                <div class="col-md-6">
                    <input id="dataFim" type="date" value="{{ date('d / m / Y', strtotime($evento->dataFim)) }}" class="form-control" name="dataFim" required autofocus disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="labelDataFim" class="col-md-4 col-form-label text-md-right">{{ __('Área') }}</label>
                <div class="col-md-6" value = "$evento->area">
                    <select class="form-control" id="areaEvento" name="area_id" disabled>
                        <option value="{{ $evento->id }}">{{ $evento->area->descricao }}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-6">
                <input id="id" value = "{{ $evento->id }}" type="hidden" class="form-control" name="id">
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button id="botaoAlterarEvento" type="button" onclick="alterarInformacoesEvento()" class="btn btn-primary">
                        {{ __('Alterar Informações') }}
                    </button>
                    <button id="botaoSalvar" style="width: 145px; height: 29px;" class="btn btn-primary" type="submit" disabled>
                        {{ __('Salvar') }}
                    </button>





                </div>
            </div>

        </form>
        <form action="/deletar/evento" method="post" id="teste">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="col-md-6">
                <input id="id" value = "{{ $evento->id }}" type="hidden" class="form-control" name="evento_id">
            </div>
            <button id="botaoCancelarEvento" style="width: 165px; height: 29px; position: absolute; left: 62.5%; top:99%; "class="btn btn-primary" type="button" onclick="event.preventDefault();if(confirm('O evento possui {{ $qtdIncricoes }} incrições. Tem certeja que deseja cancelar este evento? O cancelamento acarretará em possiveis solicitações de reembolso')){document.getElementById('teste').submit();}"/>
                {{ __('Cancelar Evento') }}
            </button>
        </form>
        <div class="row justify-content-center">
            <div class="col-md-8">
            </div>
        </div>
    </div>

    <
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

    </script>
</section>
@endsection
