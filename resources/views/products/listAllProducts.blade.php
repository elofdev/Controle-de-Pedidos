@extends('home')

@section('title', 'MAG Lista produtos')

@section('content_section')
<div class="container">
        <div class="titulo-pagina">
            <p>Listagem de Produtos</p>
        </div>
        <div id="tabela">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            #ID
                        </th>
                        <th scope="col">
                            Nome:
                        </th>
                        <th scope="col">
                            Tag:
                        </th>
                        <th scope="col" class="text-end">
                            Ações
                        </th>
                        <th>
                            <a href="{{ route('products.create') }}" class="bottom-2  bg-green-600 text-white rounded-sm">Novo
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        @foreach ($product->tags as $tag)
                        <td class="row"> 
                            <div>
                                {{-- {{ $tag->id }} --}} {{ $tag->name }} 
                            </div>  
                        </td>
                        @endforeach
                        <td colspan="2" class="bg-white text-end" style="border-width:0px;">
                            <a class="btn btn-outline-success" href="{{ route('products.show', ['product' => $product->id]) }}">Ver detalhes</a>
                        </td>
                        <td class="bg-white text-end">
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                method="POST">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-outline-danger"  type="submit" value="Remover" />
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
    </div>
@endsection