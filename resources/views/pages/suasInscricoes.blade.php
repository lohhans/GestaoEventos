@extends('layout.templateDetalhamentoEvento')

@section('content')
<div class="container">
    </br>
    </br>
    </br>
</br>
</br>
</br>
    <div class="row justify-content-sm-center">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Numero de Inscricao</th>
                      <th scope="col">Data de Inscricao</th>
                      <th scope="col">Valor</th>
                      <th scope="col">CPF - Usuario</th>
                      


                    </tr>
                  </thead>
                <tbody>
                    <?php
                    $i = 0;
                        foreach($inscricoes as $inscricao){
                            $i++;
                    ?>
                    <tr>
                      <th scope="row"><?php echo $i ?></th>
                      <td><?php echo str_pad($inscricao->id, 10, "0", STR_PAD_LEFT); ?></td>
                      <td><?php echo date('d/m/y', strtotime($inscricao->dataInscricao)) ?></td>
                      <td><?php echo $inscricao->valor ?></td>
                      <td><?php echo $inscricao->usuario->cpf . " - ".$inscricao->usuario->nome ?></td>


                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection
