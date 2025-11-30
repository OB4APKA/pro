@extends('layout')

@section('content')
<div class="container py-4">
    <h1>Редактировать</h1>

    <form method="POST" enctype="multipart/form-data" action="{{ route('characters.update', $character) }}">
        @method('PUT')
        @include('characters.form')
    </form>
</div>
@endsection
