@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>{{ $project->title }}</h1>
            <h3>Tipo: {{ $project->type?->name ?: 'Nessun tipo associato' }}</h3>
        </div>
        <div class="my-4">
            <div class="text-center">
                @if ($project->cover_image)
                    <img class="w-25" src="{{ asset("storage/$project->$cover_image") }}" alt="{{ $project->$title }}">
                @endif
            </div>
            <p>{{ $project->description }}</p>
        </div>
    </div>
@endsection
