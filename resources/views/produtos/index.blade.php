@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<?php
  @session_start();
  if(@$_SESSION['id_usuario'] == null){
    echo "<script language='javascript'> window.location='./' </script>";
  }?>
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
                  <a title="Excluir" data-bs-toggle="modal" data-bs-target="#excluirModal{{$produto->id}}" href="" ><i class="fa-solid fa-trash text-danger mr-1"></i></a>
                </td>
        </tr>
        </div>
</div>
</div> 
        <!-- {{$produtos->links()}} -->
</div>

        <!-- Modal -->
<div class="modal fade" id="excluirModal{{$produto->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Deletar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir esse registro {{$produto->nome}}?
        <?php echo @$id?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('produtos.delete', $produto)}}">        
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>
      
      
     





@endforeach

<?php 
  /* if(@$id != ""){
    echo "<script>$('excluirModal').modal(options);</script>";
} */
?>


@endsection




