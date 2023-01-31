@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-4">
            <h1>{{ $type->name }}</h1>
            <h3>Post Associati:</h3>
            <ul>
                @foreach ($type->projects as $project)
                    <li><a href="{{ route('admin.project.show', $project) }}">{{ $project->title }}</a></li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection
