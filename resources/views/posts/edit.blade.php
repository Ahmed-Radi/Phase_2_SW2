@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
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
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
