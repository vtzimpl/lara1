{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'NiP - Nipponia Projects')

@section('plugins.Datatables', true)

@section('content_header')

    <h1></h1>
@stop

@section('content')
   
<table id="tableopen" class="display" style="width:100%">
        <thead>
       <tr>
                <th>Number</th>
                <th>Project Name</th>
                <th>Type</th>
                <th>Maker</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>


        <tbody>
                @foreach ($projects as $project )
                
           
                 
            <tr>
                <td><a href="{{route('project.show', ['project'=>$project->id])}}" >{{ $project ->projnbr }}</a></td>
                <td><a href="{{route('project.show', ['project'=>$project->id])}}" >{{ $project ->projname }}</a></td>
                <td><a href="{{route('project.show', ['project'=>$project->id])}}" >{{ $project ->projtype }}</a></td>
                <td><a href="{{route('project.show', ['project'=>$project->id])}}" >{{ $project ->projmaker }}</a></td>
                <td><a href="{{route('project.show', ['project'=>$project->id])}}" >{{ $project ->projstatus }}</a></td>
                <td></td>
            </tr>
            @endforeach

           
        </tbody>
        <tfoot>
            <tr>
                <th>Number</th>
                <th>Project Name</th>
                <th>Type</th>
                <th>Maker</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>






@stop

@section('css')
   

@stop

@section('js')
    
    <script>$(document).ready(function() {
    $('#tableopen').DataTable({
        
        "paging":   false,
        "ordering": false,
        "info":     false


    });
} );</script>

@stop