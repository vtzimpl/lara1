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
            <tr>
                <td>19.13</td>
                <td>e-Rex L3e</td>
                <td>e-SC</td>
                <td>Shiwei</td>
                <td>Open</td>
                <td></td>
            </tr>
            <tr>
                <td>19.12</td>
                <td>e-REX L1e  (ex e-VIVA)</td>
                <td>e-SC</td>
                <td>Shiwei</td>
                <td>Open</td>
                <td></td>
            </tr>
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
    $('#tableopen').DataTable();
} );</script>

@stop