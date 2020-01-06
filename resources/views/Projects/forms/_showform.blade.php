


<form method="POST" action="{{ route('project.update', ['project' => $project->id]) }}" enctype="multipart/form-data"> {{--method="POST" action="{{route(Projects.store)}}"--}}
@csrf

@method('PUT')




  <div class="container" style="padding-bottom:1%">

    <div class="row">

    {{--<img src="http://fd-motors.nl/wp-content/uploads/2019/11/2fdmodelsv2-2.gif" class="rounded mx-auto d-block" alt="project image">--}}

     <img id="image_preview_container" class="rounded mx-auto d-block" src="{{env('APP_URL')}}storage/{{$project ->projimage}}" alt="Project image" style="max-height: 250px;">

    </div>

    <div class="row">

      <div class="form-group">

        <label for="projimage">Upload a photo</label>

        <input type="file" class="form-control-file" id="projimage" name="projimage"  type="file">

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
    
              <input type="text" class="form-control" id="projnbr" name="projnbr" value="{{ $project ->projnbr }}">
    
            </div>
    
            <div class="form-group col-md-8">
    
                <label for="projname">Project Name</label>

                <input type="text" class="form-control" id="projname" name="projname" value="{{ $project ->projname }}">

            </div>
         
          </div>


<div class="form-row">

  <div class="form-group col-md-2">
             
    <label for="projtype">Type</label>
    
    <select id="projtype" class="form-control" name="projtype">
      <option selected>{{ $project ->projtype }}</option>
      @foreach ($types as $type )
      <option>{{ $type ->optionsvalue }}</option>
      @endforeach
    </select>

  </div>

  <div class="form-group col-md-5">
             
    <label for="projmaker">Maker</label>
    
    <select id="projmaker" class="form-control" name="projmaker">
     
      <option selected>{{ $project ->projmaker }}</option>
      @foreach ($makers as $maker )
      <option>{{ $maker ->optionsvalue }}</option>
      @endforeach
    
    </select>

  </div>

  <div class="form-group col-md-5">
             
    <label for="projprimetargetmarket">Prime Target</label>
    
    <select id="projprimetargetmarket" class="form-control" name="projprimetargetmarket">
     
      <option selected>{{ $project ->projprimetargetmarket }}</option>
     
      @foreach ($primetargetmarkets as $primetargetmarket )
      <option>{{ $primetargetmarket ->optionsvalue }}</option>
      @endforeach
    
    </select>

  </div>

</div>

<div class="form-row">

    <div class="form-group col-md-2">
               
      <label for="projstatus">Status</label>
      
      <select id="projstatus" class="form-control" name="projstatus">
       
        <option selected>{{ $project ->projstatus }}</option>
       
        @foreach ($statuses as $status )
        <option>{{ $status ->optionsvalue }}</option>
        @endforeach
      
      </select>
  
    </div>
    
    <div class="form-group col-md-5">
               
      <label for="projopeneddate">Date Opened</label>
  
      <input type="date" id="projopeneddate" value = {{ \Carbon\Carbon::parse($project ->projopeneddate)->format('Y-m-d')}} class="form-control" name="projopeneddate">
       
         
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
  
            <input type="text" class="form-control" id="proj1stordername" name="proj1stordername"  value="{{ $project ->proj1stordername }}">
  
          </div>

  
          <div class="form-group col-md-2">
  
              <label for="projunits">Units</label>{{-- integer --}}

              <input type="number" class="form-control" id="projunits" name="projunits" value="{{ $project ->projunits }}">

          </div>
       
          <div class="form-group col-md-4">
  
            <label for="proj1starrivaldate">1st Arrival Date</label>{{-- date --}}

            <input type="date" class="form-control" id="proj1starrivaldate" value = {{ \Carbon\Carbon::parse($project ->proj1starrivaldate)->format('Y-m-d')}} name="proj1starrivaldate">

        </div>

        </div>



        <div class="form-row">

          <div class="form-group col-md">

          <label for="projcomments">Comments</label>

          <textarea id="projcomments" class="md-textarea form-control" rows="3"  name="projcomments">{{ $project ->projcomments }}</textarea>
        
        </div>

        </div>




        <div class="form-row">
          <div class="form-group col-md-4">
          <label for="projmaturityour">Our Maturity Level</label><span id="value1"  style="color:#007bff ;padding-left: 1%;" ></span>{{ $project ->projmaturityour }}<span style="color:#007bff;" >%</span>
          <input type="range" class="custom-range" id="projmaturityour" name="projmaturityour" value="{{ $project ->projmaturityour }}" oninput="DisplayChange1(this.value)">
        </div>
         
        <div class="form-group col-md-4">
          <label for="projmaturitysupplier">Supplier's Maturity Level</label><span id="value2" style="color:#007bff ;padding-left: 1%;" >{{ $project ->projmaturitysupplier }}</span><span style="color:#007bff;" >%</span>
          <input type="range" class="custom-range" id="projmaturitysupplier" name="projmaturitysupplier" value="{{ $project ->projmaturitysupplier }}" oninput="DisplayChange2(this.value)">
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

            <input type="date" class="form-control" id="projpauseddate" value = {{ \Carbon\Carbon::parse($project ->projpauseddate)->format('Y-m-d')}} name="projpauseddate">

        </div>


          <div class="form-group col-md-10">

          <label for="projreasonpaused">Reason Paused</label>

          <textarea id="projreasonpaused" class="md-textarea form-control" rows="3" name="projreasonpaused">{{ $project ->projreasonpaused }}</textarea>
        
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

            <input type="date" class="form-control" id="projrejecteddate" value = {{ \Carbon\Carbon::parse($project ->projrejecteddate)->format('Y-m-d')}} name="projrejecteddate">

        </div>


          <div class="form-group col-md-10">

          <label for="projreasonrejected">Reason Rejected</label>

          <textarea id="projreasonrejected" class="md-textarea form-control" rows="3" name="projreasonrejected">{{ $project ->projreasonrejected }}</textarea>
        
        </div>
        </div>









      </div>
    </div>
  </div>
</div>


 
<button type="submit" class="btn btn-primary" >Update</button>


</form>   

