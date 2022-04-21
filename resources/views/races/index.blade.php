@extends('layouts.plantillabase')

@section('contenido')
<h1>RACES</h1>
<div class="d-flex justify-content-end">
    <a href="/races/create" class="btn btn-outline-primary">Create new race</a>
</div>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Date</th>
            <th scope="col">Style</th>
            <th scope="col">Finishes</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($races as $race)
            <tr>
                <td>{{$race->city}}</td>
                <td>{{$race->country}}</td>
                <td>{{$race->date}}</td>
                <td>{{$race->style}}</td>
                <td>
                    @if ($race->finishes->isEmpty())
                        <a class="btn btn-outline-success" href="/finishes/{{$race->id}}/create_result">Create result</a>
                    @else
                        <a class="btn btn-outline-success" href="/finishes/{{$race->id}}/">Show result</a>
                    @endif
                </td>
                <td>
                    <form action="{{route('races.destroy', $race->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a class="btn btn-outline-info" href="/races/{{$race->id}}/edit">Edit</a>
                        <button type="submit" class="btn btn-outline-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $races->links() !!}
</div>
@endsection()