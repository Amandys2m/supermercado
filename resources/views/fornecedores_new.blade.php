@extends('template')
                
@section('conteudo')
<h1>fornecedor (novo)</h1>
<form action="{{route('fornecedores.inserir')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
    </div>
    <div class="mb-3">
        <label for="razao" class="form-label">Razão Social</label>
        <input type="number" class="form-control" id="rsocial" name="rsocial" placeholder="Razão Social">
    </div>
    <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
    </div>
    <input type="submit" value="Cadastrar" class="btn btn-success">
</form>
@endsection