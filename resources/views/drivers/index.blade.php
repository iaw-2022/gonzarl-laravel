@extends('layouts.plantillabase')

@section('contenido')
<h1>DRIVERS</h1>
<div class="d-flex justify-content-end">
    <a href="drivers/create" class="btn btn-outline-primary">Create new driver</a>
</div>
<table class="table table-striped text-center" id="small-table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Points</th>
            <th scope="col">Number</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($drivers as $driver)
            <tr>
                <td>{{$driver->name}}</td>
                <td>{{$driver->points}}</td>
                <td>{{$driver->number}}</td>
                <td>
                    <form action="{{route('drivers.destroy', $driver->id)}}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <a class="btn btn-outline-success" href="/drivers/{{$driver->id}}">More info</a> 
                        <a class="btn btn-outline-info" href="/drivers/{{$driver->id}}/edit">Edit</a>
                        <button class="btn btn-outline-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {!! $drivers->links() !!}
</div>
@endsection()