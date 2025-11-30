@extends('layout')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4 text-primary">Персонажи</h1>

    <a href="{{ route('characters.create') }}" class="btn btn-success mb-3">Добавить</a>

    <div class="row g-4">
        @foreach($characters as $character)
            <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
                <div class="card h-100 my-card">
                    <div class="character-img-wrapper">
                        <img src="{{ asset('storage/' . $character->image) }}" 
                            alt="{{ $character->name }}">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $character->name }}</h5>
                        <span class="badge bg-primary">{{ $character->type }}</span>
                        <p class="mt-2">{{ $character->description }}</p>

                        <div class="buttons card-buttons">
                            <a href="{{ route('characters.show', $character) }}" class="btn btn-primary btn-sm">Подробнее</a>
                            <a href="{{ route('characters.edit', $character) }}" class="btn btn-warning btn-sm">Изменить</a>

                            <form action="{{ route('characters.destroy', $character) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
