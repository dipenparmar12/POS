@extends('admin.main')
@section('title',"Sale Point of Sale Index")

{{-- Sub_category Selection Menu --}}
  @section('order_items')
     @include('admin.layout.pos.order_items')
  @endsection

{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
  @section('item_selecter')
    @include('admin.layout.pos.item_selecter')      
  @endsection

{{-- Table_selection Tool Palatte --}}
  @section('table_select_palette')
    @include('admin.layout.pos.table_select_palette')
  @endsection