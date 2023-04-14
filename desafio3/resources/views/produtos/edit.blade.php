@extends('layouts.default')

@section('conteudo')
<br>
    <div class="col-8 m-auto">
    @if(isset($product))
      <form name="formEdit" id="formEdit" method="POST" action="{{url("produtos/$product->id")}}">
        {{ method_field('PUT') }}
    @else
      <form name="formCard" id="formCard" method="POST" action="{{url('produtos/listar')}}">
    @endif
      {!! csrf_field() !!}
            <fieldset>
              <legend> Produtos - {{isset($product)? 'Editar' : 'Cadastrar'}}</legend>
              <div class="form-group">
                <label for="Name" class="form-label mt-4">Nome</label>
                <input type="text" id="name" name="name" class="form-control"  placeholder="Digite o nome da categoria" value="{{$product->name?$product->name:''}}" required>
              </div>
              <div class="form-group">
                <label for="description" class="form-label mt-4">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3" value="">
                {{$product->description?$product->description:''}}
                </textarea>
              </div>
              <div class="form-group">
                <label class="form-label mt-4" >Preço</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" id="price" name="price" class="form-control" aria-label="Preco" required value="{{$product->price?$product->price:''}}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="category_id" class="form-label mt-4">Categoria</label>
                <select class="form-select" id="category_id" name="category_id" required>
                  <option value="{{$product->category_id?$product->category_id:''}}">{{$product->nome_categoria?$product->nome_categoria:''}}</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </div>
            </fieldset>
            <div class="d-grid gap-2">
                <br>
                <button  class="btn btn-primary btn-lg">{{isset($product)? 'Editar' : 'Cadastrar'}}</button>
              </div>
        </form>
    </div>
@stop