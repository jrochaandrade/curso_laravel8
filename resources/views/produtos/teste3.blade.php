@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<div class="container">

<a href="{{route('produtos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir produto</a>        
                
<!-- DataTales Example -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-ordering="false">      
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
    <td>
      <a title="Detalhes do produto" href="{{route('produtos.descricao', $produto->id)}}"><i class="fa-solid fa-eye text-primary mr-1"></i></a>
      <a title="Editar" href="{{route('produtos.edit', $produto)}}"><i class="fa-solid fa-pen-to-square text-info mr-1"></i></a>
      <a title="Excluir" href="#" data-bs-toggle="modal" data-bs-target="#excluirModal{{$produto->id}}" ><i class="fa-solid fa-trash text-danger mr-1" aria-hidden="true"></i></a>
    </td>
  </tr>

  <!-- Modal -->
  <form id="deleteForm{{$produto->id}}" method="get" action="{{route('produtos.delete', $produto->id)}}">
    <input type="hidden" name="method" value="DELETE">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="modal fade" id="excluirModal{{$produto->id}}" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="excluirModalLabel">Exclusão de produto!!!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Deseja realmente excluir esse produto? {{$produto->nome}}
          </div>
          <input type="hidden" name="produto_id" id="produto_id" value="{{$produto->id}}">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

            <form id="delete-form" action="/delete" method="POST">
                <input type="hidden" id="delete-id" name="id">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </form>
@endforeach


<script type="text/javascript">
    var deleteBtn = document.querySelector('.delete-btn');
    var deleteForm = document.querySelector('#delete-form');
    var deleteIdInput = document.querySelector('#delete-id');

    deleteBtn.addEventListener('click', function(event) {
    var id = event.target.dataset.id;
    deleteIdInput.value = id;
    deleteForm.submit();
});
</script>



@endsection




