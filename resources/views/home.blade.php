@extends('layout.template')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6">
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

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <ul class="list-group" style="min-height: 400px; max-height: 400px; margin-bottom: 10px; overflow:scroll;
                                                    -webkit-overflow-scrolling: touch;">
                        <li>
                        <div class="card text-center ">
                            <div class="card-header">
                                Inscrições abertas
                            </div>
                            @foreach($eventos as $evento)
                                <div class="card-body">
                                    <h5 class="card-title">{{$evento->descricao}}</h5>
                                    <p class="card-text">{{$evento->resumoEvento}}</p>
                                    <form action="/realizarinscricao" method="get">
                                        <input name="evento_id" value="{{$evento->id}}" type="hidden">
                                        <button type="submit" class="btn btn-primary">Inscreva-se</a>
                                    </form>
                                </div>
                                <div class="card-footer text-muted">
                                    <?php
                                        $diaEvento = new DateTime($evento->dataInicio);
                                        $hoje = new DateTime("now");
                                        $intervaloInicioEvento = $hoje->diff($diaEvento);
                                        echo "Falta(m)" . $intervaloInicioEvento->format(' %a dia(s) ') . "para o inicio deste evento\n";
                                    ?>
                                    <div>
                                        <?php
                                            $fimInscricoes = new DateTime($evento->dataFimInscricoes);
                                            $hoje = new DateTime("now");
                                            $intervaloFimInscricoes = $hoje->diff($fimInscricoes);
                                            echo "Falta(m)" . $intervaloFimInscricoes->format(' %a dia(s) ') . "para fechar o prazo de inscrições";
                                        ?>

                                    </div>
                                </div>
                                <hr style="border: 0; height: 1px; background: #333; background-image: linear-gradient(to right, #ccc, #333, #ccc);"></hr>
                            @endforeach

                        </div>
                    </li>
                </ul>






                <div id="map" style="height: 75%; position: relative; top: -75%; left:120%;"></div>


    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

            </div>
        </div>
    </div>

    <div class="alinha"></div>

</div>
@endsection
