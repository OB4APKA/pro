@csrf

<div class="mb-3">
    <label class="form-label">Имя</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $character->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Тип</label>
    <input type="text" name="type" class="form-control" value="{{ old('type', $character->type ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Описание</label>
    <textarea name="description" class="form-control" required>{{ old('description', $character->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Подробное описание</label>
    <textarea name="detailed_description" class="form-control" required>{{ old('detailed_description', $character->detailed_description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Изображение</label>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-primary">Сохранить</button>
