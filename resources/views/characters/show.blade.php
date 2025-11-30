@extends('layout')

@section('content')
<div class="container py-4">
    <h1>{{ $character->name }}</h1>

    <img src="{{ asset('storage/' . $character->image) }}" class="img-fluid rounded mb-3" width="300">

    <span class="badge bg-primary">{{ $character->type }}</span>

    <p class="mt-3">{{ $character->detailed_description }}</p>

    <a href="{{ route('characters.index') }}" class="btn btn-secondary">Назад</a>
</div>
@endsection
