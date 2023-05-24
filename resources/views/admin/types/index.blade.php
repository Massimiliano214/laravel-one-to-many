@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{$type->id}}</td>
                    <td>{{$type->name}}</td>
                    <td class="">
                    
                    </td>
                </tr>
                @endforeach
            </tbody>      
    </table>
    <a href="{{route('admin.types.create')}}" class="btn btn-secondary">Aggiungi Tipologia</a>
@endsection