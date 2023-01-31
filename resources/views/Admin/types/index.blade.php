@extends('layouts.admin')

@section('content')
    <h1>Lista Generi</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="my-4">
        <a href="{{ route('admin.types.create') }}" class="btn btn-primary">Crea Genere</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->slug }}</td>
                    <td>
                        <a href="{{ route('admin.types.show', $type->slug) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.types.edit', $type->slug) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="d-inline-block">
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
