@extends('admin.main')

<<<<<<< HEAD
=======

>>>>>>> e70184c5916a29c530198c4878e539d3ca80438b
{{-- Index Categories ( Card->table->list ) --}}
@section('content')
  

  {{-- Ajax Script for Append Modal Form into index Page --}}
  @include('script.crud_script')
  @include('script.my_jquery_functions')


  {{-- Card With Table ( Records index Lists ) --}}
<<<<<<< HEAD
  @component('admin.layout.components.card',['title'=>Session::get('table').""])
    <div id="db_records">
      @include('crud.category._table',[$db_records])
    </div>
=======
  @component('admin.layout.components.card',['title'=>'category'])
    @include('crud.category._table',[$db_records])
>>>>>>> e70184c5916a29c530198c4878e539d3ca80438b
  @endcomponent
          

  {{-- Repeatative Modal component For, Modal Configration  --}}
  @component('admin.layout.components.modal',['modal_id'=>'category_modal'])
    <div id="ajax_modal">      
    </div>
  @endcomponent
<<<<<<< HEAD
=======
  
>>>>>>> e70184c5916a29c530198c4878e539d3ca80438b

@endsection {{-- #content --}}