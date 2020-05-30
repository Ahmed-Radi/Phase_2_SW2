@extends('layouts.app')

@section('content')
<div class="well">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <h3>Username: {{$user['name']}}</h3>
            <h3>Email: {{$user['email']}}</h3>
            <br>
            <a href="/edit/user" class="btn btn-warning">Edit</a>
            <a href="/"  class="btn btn-primary">back</a>
        </div>
    </div>
</div>
@endsection
