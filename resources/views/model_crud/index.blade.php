@extends('admin.main')

{{-- Index Categories ( Card->table->list ) --}}
@section('content')
  

  {{-- Ajax Script for Append Modal Form into index Page --}}
  @include('script.model_crud_script',[$crud_table])

  <p> {{ @$test }} </p>

  {{-- Card With Table ( Records index Lists ) --}}
  @component('layout.components.window_card',['title'=>$crud_table])
    <div id="db_records">
        @include("model_crud.{$crud_table}._table");
    </div>
  @endcomponent
          
          
  {{-- Repeatative Modal component For, Modal Configration  --}}
  @component('layout.components.modal',['modal_id'=> $crud_table.'_modal'])
    <div id="ajax_modal">
        <h3>Please Wait.....</h3>
    </div>
  @endcomponent

@endsection {{-- #content --}}