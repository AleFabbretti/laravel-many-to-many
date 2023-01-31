@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>Modifica: {{ $project->title }}</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="my-4">
            <form action="{{ route('admin.project.update', $project) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo progetto</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Inserisci il titolo del progetto" value="{{ old('title', $project->title) }}">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="company" name="company"
                        placeholder="Inserisci il cliente" value="{{ old('company', $project->company) }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" id="description" name="description" rows="10"
                        placeholder="inserisci la descrizione">{{ old('description', $project->description) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="types" class="form-label">Tipo</label>
                    <select class="form-select" name="type_id" id="type_id">
                        <option value="">Senza Categoria</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}"
                                {{ old('type_id', $project->type_id) == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
@endsection
