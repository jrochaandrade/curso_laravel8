@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php 
    $valor_prod = number_format($produto->valor, 2, ',', '.');
?>
<div class="jumbotron">
    <h1 class="display-4"><?php echo $produto->nome;?></h1>
    <p class="lead"><?php echo $produto->descricao?> - Valor R$ <?php echo $valor_prod; ?></p>
    <hr class="my-4">
    <p><?php echo $produto->descricao2?></p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="\produtos" role="button">Ver produtos</a>
    </p>
</div>
@endsection
