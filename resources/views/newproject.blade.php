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

      <img src="http://fd-motors.nl/wp-content/uploads/2019/11/2fdmodelsv2-2.gif" class="rounded mx-auto d-block" alt="project image">

    </div>

    <div class="row">

      <div class="form-group">

        <label for="browseforfile">Upload image</label>

        <input type="file" class="form-control-file" id="browseforfile">

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
    
            <div class="form-group col-md-4">
             
              <label for="projnbr">Number</label>
    
              <input type="text" class="form-control" id="projnbr">
    
            </div>
    
            <div class="form-group col-md-8">
    
                <label for="projname">Project Name</label>

                <input type="text" class="form-control" id="projname">

            </div>
         
          </div>


<div class="form-row">

  <div class="form-group col-md-2">
             
    <label for="projtype">Type</label>
    
    <select id="projtype" class="form-control">
     
      <option selected>Choose...</option>
     
      <option>...</option>
    
    </select>

  </div>

  <div class="form-group col-md-5">
             
    <label for="projmaker">Maker</label>
    
    <select id="projmaker" class="form-control">
     
      <option selected>Choose...</option>
     
      <option>...</option>
    
    </select>

  </div>

  <div class="form-group col-md-5">
             
    <label for="projprimetargetmarket">Prime Target</label>
    
    <select id="projprimetargetmarket" class="form-control">
     
      <option selected>Choose...</option>
     
      <option>...</option>
    
    </select>

  </div>

</div>

<div class="form-row">

    <div class="form-group col-md-2">
               
      <label for="projstatus">Status</label>
      
      <select id="projstatus" class="form-control">
       
        <option selected>Choose...</option>
       
        <option>...</option>
      
      </select>
  
    </div>
      
    <div class="form-group col-md-5">
               
      <label for="projopeneddate">Date Opened</label>
      
      <input type="date" id="projopeneddate" class="form-control">
       
         
    </div>
   
  </div>

  </div>

</div>

</div>





  <div class="card">
    <div class="card-header" id="completedheader">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Completed
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="completedheader" data-parent="#accordionproject">
      <div class="card-body">
        


        
        <div class="form-row">
    
          <div class="form-group col-md-4">
           
            <label for="proj1stordername">First Order Name</label>
  
            <input type="text" class="form-control" id="proj1stordername">
  
          </div>

  
          <div class="form-group col-md-2">
  
              <label for="projunits">Units</label>{{-- integer --}}

              <input type="number" class="form-control" id="projunits">

          </div>
       
          <div class="form-group col-md-4">
  
            <label for="proj1starrivaldate">1st Arrival Date</label>{{-- date --}}

            <input type="date" class="form-control" id="proj1starrivaldate">

        </div>

        </div>



        <div class="form-row">

          <div class="form-group col-md">

          <label for="projcomments">Comments</label>

          <textarea id="projcomments" class="md-textarea form-control" rows="3"></textarea>
        
        </div>

        </div>




        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="projmaturityour">Our Maturity Level</label><span id="value1"  style="color:#007bff ;padding-left: 1%;" ></span> <span style="color:#007bff;" >%</span>
          <input type="range" class="custom-range" id="projmaturityour"  oninput="DisplayChange1(this.value)">
        </div>
         
        <div class="form-group col-md-4">
          <label for="projmaturitysupplier">Supplier's Maturity Level</label><span id="value2" style="color:#007bff ;padding-left: 1%;" ></span> <span style="color:#007bff;" >%</span>
          <input type="range" class="custom-range" id="projmaturitysupplier"  oninput="DisplayChange2(this.value)">
        </div>


        </div>

      </div>
    </div>
  </div>






  <div class="card">

    <div class="card-header" id="pausedheader">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Paused
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="pausedheader" data-parent="#accordionproject">
      <div class="card-body">
       
        


        <div class="form-row">

          <div class="form-group col-md-2">
  
            <label for="projpauseddate">Date Paused</label>{{-- date --}}

            <input type="date" class="form-control" id="projpauseddate">

        </div>


          <div class="form-group col-md-10">

          <label for="projreasonpaused">Reason Paused</label>

          <textarea id="projreasonpaused" class="md-textarea form-control" rows="3"></textarea>
        
        </div>
        </div>












      </div>
    </div>
  </div>



  <div class="card">
    <div class="card-header" id="rejectedheader">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Rejected
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="rejectedheader" data-parent="#accordionproject">
      <div class="card-body">
       
    
        <div class="form-row">

          <div class="form-group col-md-2">
  
            <label for="projrejecteddate">Date Rejected</label>{{-- date --}}

            <input type="date" class="form-control" id="projrejecteddate">

        </div>


          <div class="form-group col-md-10">

          <label for="projreasonrejected">Reason Rejected</label>

          <textarea id="projreasonrejected" class="md-textarea form-control" rows="3"></textarea>
        
        </div>
        </div>









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