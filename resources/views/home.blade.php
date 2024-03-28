@extends('layouts.app')

@section('title', 'MAG controle de pedidos')

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('header_section')
    @include('components/navbar')
@endsection

@section('content_section')
        <h1>Conteúdo Principal</h1>
@endsection

@section('footer_section')
    @include('components/nav-footer')
@endsection
