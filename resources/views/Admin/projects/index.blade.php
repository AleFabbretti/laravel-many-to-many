@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="my-4">
        <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Crea progetto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Cliente</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($project as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->company }}</td>
                    <td>
                        <a href="{{ route('admin.project.show', $project->slug) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.project.edit', $project->slug) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.project.destroy', $project) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
