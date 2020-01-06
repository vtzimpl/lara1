<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\dropdnhelper;
use App\Http\Requests\StoreProject;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Projects.index',['projects'=>Project::all()]);
        //dd(Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Projects.create',['types'=>dropdnhelper::where('labelname', 'type')->get(),'makers'=>dropdnhelper::where('labelname', 'maker')->get(), 'statuses'=>dropdnhelper::where('labelname', 'status')->get(), 'primetargetmarkets'=>dropdnhelper::where('labelname', 'primetargetmarket')->get() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request)
    {
      // dd($request->all());
       $ValidatedData=$request->validated();//to validation ginetai sto StoreProject mesa sta Requests
       if ($request->hasFile('projimage')) {
          //$ValidatedData['projimage']=$request->projimage->store('projimage');
          $path = $request->file('projimage')->store('projimage');
          $ValidatedData['projimage']=$path;
       }
       
      $project=Project::create($ValidatedData);  //mazikh ekxwrisi
      $id=$project->id;
      $request->session()->flash('status','New Projected was created');
      //return view('Projects.create',['types'=>dropdnhelper::where('labelname', 'type')->get(),'makers'=>dropdnhelper::where('labelname', 'maker')->get(), 'statuses'=>dropdnhelper::where('labelname', 'status')->get(), 'primetargetmarkets'=>dropdnhelper::where('labelname', 'primetargetmarket')->get() ]);
      return view('Projects.show',['project'=>Project::find($id),'types'=>dropdnhelper::where('labelname', 'type')->get(),'makers'=>dropdnhelper::where('labelname', 'maker')->get(), 'statuses'=>dropdnhelper::where('labelname', 'status')->get(), 'primetargetmarkets'=>dropdnhelper::where('labelname', 'primetargetmarket')->get() ]);
    
     

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    return view('Projects.show',['project'=>Project::find($id), 'types'=>dropdnhelper::where('labelname', 'type')->get(),'makers'=>dropdnhelper::where('labelname', 'maker')->get(), 'statuses'=>dropdnhelper::where('labelname', 'status')->get(), 'primetargetmarkets'=>dropdnhelper::where('labelname', 'primetargetmarket')->get() ]);
    
        //return view('Projects.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProject $request, $id)
    {
        $project = Project::findOrFail($id);
        $ValidatedData = $request->validated();
        if ($request->hasFile('projimage')) { //an ginei POST oxi an emfanizetai
            $path = $request->file('projimage')->store('projimage');
            $ValidatedData['projimage']=$path;
        }
        //na ginoun delete ta proigoumena
         $project->fill($ValidatedData);
         $project->save();
         $request->session()->flash('status', 'Project was updated!');
       return redirect()->route('project.show', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
