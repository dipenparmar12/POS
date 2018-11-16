@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>
    <br><br>
    
    <h1>{{$post->title}}</h1>
    <small>created at {{$post->created_at}}</small>
    <hr><br>
    <p>{{$post->body}}</p>

    <hr>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning"> Edit </a>

    {{--  DELETE BTN  --}}
    <form action="/posts/{{$post->id}}" method="POST" class="pull-right">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete" class="btn">
    </form>

@endsection

@section('contect')
    <h3>another ParaGraph in Contect section </h3>    
@endsection