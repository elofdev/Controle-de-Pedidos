@extends('home')

@section('title', 'MAG Lista categorias')

@section('content_section')
<div class="container my-4 flex flex-col justify-center items-center mx-5">
    <div class="w-full font-semibold bg-slate-600 text-lg items-center">
        Lista Categorias
    </div>
    <div class="w-full my-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">
                        #ID
                    </th>
                    <th scope="col">
                        Nome:
                    </th>
                    <th scope="col">
                        Taxa:
                    </th>
                    <th>
                        <a href="{{ route('tags.create') }}" class="bg-green-400 rounded-md shadow-md px-3 py-2">Nova
                        </a>
                    </th>
                </tr>
             </thead>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{ $tag->id }}</th>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->rate }}</td>
                    <td>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="link:<a href='{{ route('tag.show',['tag' => $tag->id]) }}''></a>" data-html="true">
                            Detalhes
                        </button>
                    </td>
                    <td>
                        <form action="{{ route('tags.destroy', ['tag'=> $tag->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Remover" />
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection