@extends('home')

@section('title', 'MAG Cadastro de  Produto')

@section('content_section')
<div class="container">
        <div class="titulo-pagina">
            <p>
                Formulário de cadastro de produtos
            </p>
        </div>
        <div class="form">
            <form action="{{ route('products.store') }}" method="POST" name="procuct-form" id="procuct-form">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-5 form-floating mb-3">
                        <input class="form-control" name="name" id="floatingInput" placeholder="Nome do Produto">
                        <label class="floating-input ms-2">Nome do Produto:</label>
                    </div>
                    <div class="col-5 ">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="tags_info">Tags</label>
                            <select class="form-select py-3" multiple="multiple" size="10" aria-label="tags_info" id="tags_info" name="tags_info[]">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" class="fs-5">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <input type="submit" value="Salvar" class="btn btn-primary btn-lg">
                </div>
            </form>
        </div>
    </div>
@endsection