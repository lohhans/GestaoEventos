@extends('layout.templateDetalhamentoEvento')

@section('content')

<script type="text/javascript" language="javascript">
</script>

<section class="form-gradient mb5">
	</br>
	</br>
	<div class="container">

		<div class="row justify-content-sm-center">

			<div class="col-sm-2"></div>
			<div class="col-sm-9">
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
			<div class="col-sm-2"></div>
		</div>
	</div>
</section>
@endsection
