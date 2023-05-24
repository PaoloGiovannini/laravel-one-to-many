@extends('layouts.admin')

@section('content')
    <div class="col-10">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Numero di progetti</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->slug }}</td>
                        <td>{{ count($type->projects) }}</td>
                        <td>
                            <a class="btn rounded-pill btn-primary me-2" href="{{route('admin.types.show', $type->slug)}}">VEDI</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
