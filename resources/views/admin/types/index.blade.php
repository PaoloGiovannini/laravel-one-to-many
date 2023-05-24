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
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->slug }}</td>
                        <td>{{ count($type->projects) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
