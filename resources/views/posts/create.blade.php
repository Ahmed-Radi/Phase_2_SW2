@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class = "form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
             {{Form::select('tags', array(
                'Computer Science' => 'Computer Science',
                'Ethical Hacking' => 'Ethical Hacking',
                'information technology' => 'information technology',
                'data science' => 'data science',
                'artificial intillegince' => 'artificial intillegince',
                'machine learning' => 'machine learning',
                'deep learning' => 'deep learning',
                'web development' => 'web development',
                'mobile development' => 'mobile development',
                'java' => 'java',
                'python' => 'python',
                'c++' => 'c++',
            ))}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>


        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
