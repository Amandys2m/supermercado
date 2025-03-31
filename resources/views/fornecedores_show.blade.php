@extends('template')

@section('conteudo')
    <h1>fornecedores</h1>
    <table class="table">
        <thead>
            <tr>
                <th>TD</th>
                <th>Nome</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedores as $fornecedor)
            <tr>
                <td>{{ $fornecedor->id }}</td>
                <td>{{ $fornecedor->nome }}</td>
                <td>{{ $fornecedor->rsocial }}</td>
                <td>{{ $fornecedores->cnpj }}</td>
                <td>
                    <a href="{{route('fornecedores.alterar', ['id'=>$fornecedor->id])}}" class="btn btn-info">Alterar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('fornecedores.novo')}}" class="btn btn-primary">novo</a>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>