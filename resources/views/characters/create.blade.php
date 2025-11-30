@extends('layout')

@section('content')
<div class="container py-4">
    <h1>Добавить персонажа</h1>

    <form method="POST" enctype="multipart/form-data" action="{{ route('characters.store') }}">
        @include('characters.form')
    </form>
</div>
@endsection
