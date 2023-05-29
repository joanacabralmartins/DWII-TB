@extends('templates.main', ['titulo' => "Docência (2022)"])

@section('titulo') Docência @endsection

@section('conteudo')
    <form action="{{ route('docencia.store') }}" method="POST">
        @csrf
        <table class="table align-middle caption-top table-striped">
            <caption>Tabela de <b>Disciplinas / Professores</b></caption>
            <thead>
                <tr> 
                    <th scope="col" class="d-none d-md-table-cell text-center">Disciplina</th>
                    <th scope="col" class="d-none d-md-table-cell text-center">Professor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($disciplinas as $item)
                    <tr>
                        <td class="d-none d-md-table-cell text-center">{{ $item['nome']}}</td>        
                        <td>
                            <select 
                                class="form-select form-select-sm" 
                                name="professores[]" 
                                required
                                >
                                <option value=""></option>
                                    @foreach ($professores as $professor)
                                        <option value="{{ $item->id.'_'.$professor->id }}" >{{ $professor->nome }}</option>
                                    @endforeach
                            </select>
                        </td>
                    </tr>
                @endforeach
            </tbody>            
        </table>    

        <div class="row">
            <div class="col">
                <a href="{{route('disciplinas.index')}}" class="btn btn-danger btn-sm btn-block align-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                    </svg>
                    &nbsp; Cancelar
                </a>
                <a href="javascript:document.querySelector('form').submit();" class="btn btn-success btn-sm btn-block align-content-center">
                    Confirmar &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                </a>
            </div>
        </div>
    </form>
@endsection