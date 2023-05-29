@extends('templates.main', ['titulo' => "Disciplinas (2022)", 'rota' => "disciplinas.create"])

@section('titulo') Disciplinas @endsection

@section('conteudo')
    <div class="row">
        <div class="col">
            <x-datatable 
                title="Disciplinas" 
                crud="disciplinas" 
                :header="['id', 'nome', 'curso']" 
                :data="$disciplinas"
                :cursos="$cursos"
                :acoes="[true, true, true, true]"
            /> 
        </div>
    </div>
@endsection