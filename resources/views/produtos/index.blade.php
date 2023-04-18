@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<div class="container">
<a href="produtos/inserir" type="button" class="mt-4 mb-4 btn btn-primary">Inserir produto</a>
        @foreach($produtos as $produto)
        <p>{{$produto->nome}}</p>
        @endforeach

        {{$produtos->links()}}
</div>
@endsection