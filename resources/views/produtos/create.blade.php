@extends('layouts.template')
@section('title', 'Criar produtos')
@section('content')
<div class="container mt-4"> 
    <form method="POST" action="{{route('produtos.insert')}}">
        @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="" name="nome">            
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Estoque</label>
            <input type="text" class="form-control" id="" name="estoque">     
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Valor</label>
            <input type="text" class="form-control" id="" name="valor">     
            </div>
        </div>
        
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
        <textarea class="form-control" id="" name="descricao" rows="3"></textarea>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrição longa</label>
        <textarea class="form-control" id="" name="descricao2" rows="3"></textarea>
        </div>

        
                
    </div>

    
    

    

    

    <button type="submit" class="btn btn-primary">Adicionar</button>
    <a href="{{route('produtos')}}" type="button" class="mt-4 mb-4 btn btn-primary">Voltar</a> 
    </form>
</div>
@endsection