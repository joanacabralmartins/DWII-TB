@extends('templates.main', ['titulo' => "Novo Professor"])

@section('titulo') Professores @endsection

@section('conteudo')
    <form action="{{ route('profs.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col" >
                    <label class="btn btn-secondary mb-3">
                        <input type="radio" name="ativo" value="1" autocomplete="off"> Ativo
                    </label>
                    <label class="btn btn-secondary mb-3">
                        <input type="radio" name="ativo" value="0" autocomplete="off"> Inativo
                    </label> 
            </div>
        </div>       
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        name="nome" 
                        placeholder="Nome"
                        value="{{old('nome')}}"
                    />
                    <label for="nome">Nome do Professor</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="E-mail"
                        value="{{old('email')}}"
                    />
                    <label for="email">E-mail do Professor</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" >
                <div class="form-floating mb-3">
                    <input 
                        type="siape" 
                        class="form-control" 
                        name="siape" 
                        placeholder="Siape"
                        value="{{old('siape')}}"
                    />
                    <label for="email">SIAPE do Professor</label>
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 mb-4">
            <div>
                <h5><span class="badge bg-secondary">Eixo/Área</span></h5>
            </div>
            <div class="flex-grow-1">
                <select class="form-select form-select-sm" name="eixo" id="id" required>
                    <option value=""></option>
                        @foreach ($eixos as $eixo)
                            <option value="{{ $eixo->id }}" {{ $eixo->id == old('eixo') ? 'selected' : '' }}>{{ $eixo->nome }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{route('profs.index')}}" class="btn btn-secondary btn-block align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                    &nbsp; Voltar
                </a>
                <a href="javascript:document.querySelector('form').submit();" class="btn btn-success btn-block align-content-center">
                    Confirmar &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                </a>
            </div>
        </div>
    </form>
@endsection