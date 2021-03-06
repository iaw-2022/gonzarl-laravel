@extends('layouts.plantillabase')

@section('contenido')
<h2>Create team</h2>
@if ($errors->any())
        <div class="alert alert-danger">
            <h3>Some error ocurred:</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
<form action="/teams" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">User</label>
        <select name="user_id" class="form-control rounded-0" value="{{ old('user_id') }}">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <a href="/teams" class="btn btn-outline-secondary">Cancel</a>
    <button type="submit" class="btn btn-outline-primary">Save</button>
</form>
@endsection
