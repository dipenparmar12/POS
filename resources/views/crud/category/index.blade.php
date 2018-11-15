@extends('admin.main')


{{-- Index Categories ( Card->table->list ) --}}
@section('content')
  

  {{-- Ajax Script for Append Modal Form into index Page --}}
  @include('script.crud_script')
  @include('script.my_jquery_functions')


  {{-- Card With Table ( Records index Lists ) --}}
  @component('admin.layout.components.card',['title'=>'category'])
    @include('crud.category._table',[$db_records])
  @endcomponent
          

  {{-- Repeatative Modal component For, Modal Configration  --}}
  @component('admin.layout.components.modal',['modal_id'=>'category_modal'])
    <div id="ajax_modal">      
    </div>
  @endcomponent
  

@endsection {{-- #content --}}