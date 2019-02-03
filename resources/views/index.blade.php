@section('title',"Custom Page Title")

@extends('admin.main')

@section('js')
  @parent
  {{-- Your additional JS Scripts --}}
@endsection


@section('content')
  <h1> Web content </h1>
@endsection