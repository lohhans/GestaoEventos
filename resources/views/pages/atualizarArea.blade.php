@extends('layout.template')

@section('content')

    <h1>Atualizar Area</h1>

    <form action="/atualizar/area" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            Descrição Anterior: <input type="text" name="descricao" ><br/>
            Descrição Atualizada: <input type="text" name="descricaoAtualizada" ><br/>
            <input  type="submit" value="atualizar" />
    </form>
@endsection
