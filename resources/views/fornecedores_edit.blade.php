@extends('template')
                
@section('conteudo')
<h1>Fornecedor (alterar)</h1>
<form action="{{route('fornecedores.editar', ['id' => $fornecedor->id])}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{$fornecedor->nome}}">
    </div>
    <div class="mb-3">
        <label for="razao" class="form-label">Razão social</label>
        <input type="number" class="form-control" id="rsocial" name="rsocial" placeholder="Razão Social" value="{{$fornecedor->rsocial}}">
    </div>
    <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" value="{{$fornecedor->cnpj}}">
    </div>
    <input type="submit" value="alterar" class="btn btn-success">
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Excluir
</button>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Deseja realmente excluir o fornecedor? <strong>{{$fornecedor->nome}}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <a href="{{route('fornecedor.excluir',['id'=>$fornecedor->id])}}" class="btn btn-outline-danger">Desejo excluir</a>
      </div>
    </div>
  </div>
</div>
@endsection