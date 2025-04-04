@extends('template')
                
@section('conteudo')
<h1>produtos (alterar)</h1>
<form action="{{route('produtos.editar', ['id' => $produto->id])}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{$produto->nome}}">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="Preço" value="{{$produto->preco}}">
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
       Deseja realmente excluir o produto? <strong>{{$produto->nome}}</strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <a href="{{route('produtos.excluir',['id'=>$produto->id])}}" class="btn btn-outline-danger">Desejo excluir</a>
      </div>
    </div>
  </div>
</div>
@endsection