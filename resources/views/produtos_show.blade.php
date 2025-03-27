@extends('template')

                @section('conteudo')
                <h1>produtos</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>TD</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>
                                <a href="{{route('produtos.alterar', ['id'=>$produto->id])}}" class="btn btn-info">Alterar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('produtos.novo')}}" class="btn btn-primary">novo</a>
                @endsection