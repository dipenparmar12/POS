@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>

    <br><br>

     <form action="/posts/{{$post->id}}" method="POST" >
        @csrf
        
        <div class="form-group">

            <label for="title">Title</label>
            <input type="text" name="title"  class="form-control" value="{{$post->title}}">
            <br>
            
            <label for="body">Blog Content</label>
            <textarea name="body" placeholder="" cols="10" rows="8" class="form-control">
                {{ $post->body }}
            </textarea>

            <hr>

            <input type="hidden" name="_method" value="PUT">
            
            <button type="submit" class="btn btn-primary" > Submit </button>
            <button type="reset" class="btn " > clear </button>

        </div>
    </form> 

@endsection
