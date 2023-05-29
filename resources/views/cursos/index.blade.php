@extends('templates.main', ['titulo' => "Cursos", 'rota' => "cursos.create"])

@section('titulo') Cursos @endsection

@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datatable 
                title="Cursos" 
                crud="cursos" 
                :header="['id', 'nome', 'sigla']" 
                :data="$cursos"
                :acoes="[true, true, true]"
            /> 
        </div>
    </div>
@endsection