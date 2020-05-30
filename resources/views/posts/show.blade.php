@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="well">
        <div class="row">
            <h3 style="text-align: center">{{$post->title}}</h3>
        </div>
        <hr>
        <div class="row">
            <h3>Post Body<br></h3> {!!$post->body!!}
        </div>
        <hr>
        <div class="row">
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>

        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>

@endsection
