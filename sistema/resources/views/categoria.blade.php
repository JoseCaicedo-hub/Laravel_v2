@extends('app')
@section('title', 'Sistema - Categoria')

@push('css')
    <link rel="stylesheet" href="{{asset('css/mantenimiento.css')}}">
@endpush

@section('contenido')
    <h2>Categorias</h2>
    <p>Este es el contenido de categorias</p>
@endsection

@push('scripts')
    <script src="{{asset('js/mantenimiento.js')}}"></script>
@endpush

