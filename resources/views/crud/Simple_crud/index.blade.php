@extends('layout.app')
@section('content')
    <h1> Blogs By Atmiya clg </h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, distinctio! </p> <br>
    @if( count($posts) > 0 )
        @foreach($posts as $post)
            <h1> <a href="posts/{{$post->id}}"> {{$post->title}} </a></h1>
            <small> {{$post->created_at }} </small>
            <p> {{$post->body}} </p>
            <hr>
        @endforeach
         {{$posts->links()}} <!--   #For Pagination if Available it -->
    @else
        <p>There is no Posts </p>
    @endif
@endsection