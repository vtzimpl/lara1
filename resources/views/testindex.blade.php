{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'NiP - Nipponia Projects')

@section('plugins.Datatables', true)

@section('content_header')

    <h1></h1>
@stop

@section('content')





@stop

@section('css')
   

@stop

@section('js')
    
    <script>$(document).ready(function() {
    $('#tableopen').DataTable();
} );</script>

@stop