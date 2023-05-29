@extends('templates.main', ['titulo' => "Eixos e Áreas", 'rota' => "eixos.create"])

@section('titulo') Eixos @endsection

@section('conteudo')
<div class="row">
        <div class="col">
            <x-datatable 
                title="Eixos e Áreas" 
                crud="eixos" 
                :header="['id','nome']" 
                :data="$eixos"
                :acoes="[true, false, true]"
            /> 
        </div>
    </div>
@endsection