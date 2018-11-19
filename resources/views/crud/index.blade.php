@extends('admin.main')

{{-- Index Categories ( Card->table->list ) --}}
@section('content')
  

  {{-- Ajax Script for Append Modal Form into index Page --}}
  @include('script.crud_script',[$crud_table])
  @include('script.my_jquery_functions')


  {{-- Card With Table ( Records index Lists ) --}}
  @component('admin.layout.components.window_card',['title'=>$crud_table])
    <div id="db_records">
      @include('crud.'.$crud_table.'._table',[$db_records])
    </div>
  @endcomponent
          
          
  {{-- Repeatative Modal component For, Modal Configration  --}}
  @component('admin.layout.components.modal',['modal_id'=>$crud_table.'_modal'])
    <div id="ajax_modal">      
    </div>
  @endcomponent

@endsection {{-- #content --}}