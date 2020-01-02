{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'NiP - Nipponia Projects')
@section('content_header')
    <h1>New Project</h1>
@stop
@section('content')


{{-- flash messages --}}
@if (session()->has('status'))
<div class="alert alert-success" role="alert">
  {{session()->get('status')}}
 </div>
 @elseif ($errors->any())
  <div class="alert alert-warning" role="alert">
    <ul>
  @foreach($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
    </ul> 
  </div>
@else
  <div class="alert alert-primary" role="alert">
  New Nipponia Project
  </div>
@endif
{{-- flash messages --}}



@include('Projects.forms._showform')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
      function DisplayChange1(newvalue) { 
          document.getElementById( 
            "value1").innerHTML = newvalue; 
      } 
  </script> 
     <script> 
      function DisplayChange2(newvalue) { 
          document.getElementById( 
            "value2").innerHTML = newvalue; 
      } 
  </script> 

@stop