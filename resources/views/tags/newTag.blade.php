@extends('home')

@section('title', 'MAG Criar categoria')

@section('content_section')
    <div class="container flex flex-col justify-between items-center my-4">
        <div class="titulo-pagina">
            <h3>Formulário de cadastro de Tag</h3>
        </div>
        <div class="w-full h-auto flex flex-col justify-between gap-3">
            <form action="{{ route('tags.store') }}" method="POST">
                @csrf
                <div class="flex flex-row justify-between">
                    <label class="w-[20%]">Nome da Categoria:</label>
                    <input class="w-[80%]" name="name" id="floatingInput" placeholder="Nome da Categoria">
                </div>
                <div class="flex flex-row justify-between">
                    <label class="w-[20%]">Taxa %:</label>
                    <input class="w-[80%]" name="name" id="floatingInput" placeholder="Valor % taxa">
                </div>
                <input type="submit" value="Salvar" class="bg-green-400 rounded-md shadow-md px-3 py-2">
            </form>
        </div>
    </div>
@endsection
