{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'NiP - Nipponia Projects')

@section('content_header')
    <h1>New Project</h1>
@stop

@section('content')
<div class="alert alert-primary" role="alert">
 New Nipponia Project
</div>

<form>




<div class="container" style="padding-bottom:1%">

<div class="row">
<img src="http://fd-motors.nl/wp-content/uploads/2019/11/2fdmodelsv2-2.gif" class="rounded mx-auto d-block" alt="...">

</div>
<div class="row">
<div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  </div>

</div>












<div class="accordion" id="accordionproject">
        <div class="card">
          <div class="card-header" id="generalheader">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                General
              </button>
            </h2>
          </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="generalheader" data-parent="#accordionproject">
      <div class="card-body">
       




   





      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Number</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Project Name</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Type</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Maker</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Status</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Prime Target</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Date</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Important
      </label>
    </div>
  </div>
 

 





      </div>
    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Completed
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionproject">
      <div class="card-body">
        ...............................
      </div>
    </div>
  </div>



  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Rejected
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionproject">
      <div class="card-body">
       ..................................................
      </div>
    </div>
  </div>




  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Paused
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="generalheader" data-parent="#accordionproject">
      <div class="card-body">
        ..........................................
      </div>
    </div>
  </div>







</div>













 
 
  <button type="submit" class="btn btn-primary">Submit</button>




</form>   













@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
 

@stop