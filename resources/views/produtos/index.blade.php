@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<div class="container">

<a href="produtos/inserir" type="button" class="mt-4 mb-4 btn btn-primary">Inserir produto</a>        
                
<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Estoque</th>
        <th scope="col">Ações</th>
        </tr>
      </thead>

      <tbody>
      @foreach($produtos as $produto)
        <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->estoque}}</td>
                <td></td>
        </tr>
      @endforeach
      </tbody>
  </table>
</div>
</div>
</div>      

        <!-- {{$produtos->links()}} -->
</div>
@endsection