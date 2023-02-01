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

                @if ($project->technologies->isNotEmpty())
                    <div>
                        <h3 class="m-0 mt-4">Tecnologie:</h3>
                        <ul>
                            @foreach ($project->technologies as $technology)
                                <a href="{{ route('admin.technologies.show', $technology) }}" class="text-decoration-none">
                                    <span class="badge text-bg-info m-1 p-2">{{ $technology->name }}</span>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <div>
                        <h3 class="m-0 mt-4">Nessuna tecnologia indicata.</h3>
                    </div>
                @endif
            </div>
            <p>{{ $project->description }}</p>
        </div>
    </div>
@endsection
