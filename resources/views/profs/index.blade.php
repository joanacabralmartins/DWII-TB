@extends('templates.main', ['titulo' => "Professores", 'rota' => "profs.create"])

@section('titulo') Professores @endsection

@section('conteudo')
    <div>
    <table class="table align-middle caption-top table-striped">
        <caption>Tabela de <b>Professores</b></caption>
        <thead>
        <tr>
            @php $headers=['nome', 'eixo', 'status'] @endphp
            @foreach ($headers as $item)        
                <th scope="col" class="d-none d-md-table-cell">{{ strtoupper($item) }}</th>
            @endforeach
            <th scope="col">AÇÕES</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($profs as $item)
                <tr>
                    <td class="d-none d-md-table-cell">{{ strtoupper($item->nome) }}</td>
                    @foreach ($eixos as $eixo)
                        @if($eixo->id == $item->eixo)
                            <td class="d-none d-md-table-cell">{{ strtoupper($eixo->nome) }}</td>
                        @endif
                    @endforeach  
                    @if($item->ativo == "1")
                        <td class="d-none d-md-table-cell">ATIVO</td>
                    @else
                        <td class="d-none d-md-table-cell">INATIVO</td>
                    @endif  

                    <td>
                        <a href= "{{ route('profs.edit', $item->id) }}" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                            </svg>
                        </a>
                        <a nohref style="cursor:pointer" onclick="showInfoModal('{{ $item->nome }}', '{{ $item->sigla }}')" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </svg>
                        </a>
                        <a href= "{{ route('docencia.index') }}" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection