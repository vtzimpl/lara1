<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();
Route::get('/', function() {
    return redirect('project');
})->name('open')->middleware('auth');



Auth::routes();
Route::get('/newproject', function() {
    return view('newproject');
})->name('newproject')->middleware('auth');



Auth::routes();
Route::get('/open', function() {
    return view('open');
})->name('open2S')->middleware('auth');







Route::resource('project', 'ProjectController')->only(['index','show','create','store','update']);

Route::get('projectcomp', function () {
    return view('Projects.index',['projects'=>App\Project::where('projstatus', "Completed")
     ->get()]);
});

Route::get('projectpend', function () {
    return view('Projects.index',['projects'=>App\Project::where('projstatus', "Pending Com.")
     ->get()]);
});

Route::get('projectopen', function () {
    return view('Projects.index',['projects'=>App\Project::where('projstatus', "Open")
     ->get()]);
});

Route::get('projectrej', function () {
    return view('Projects.index',['projects'=>App\Project::where('projstatus', "Rejected")
     ->get()]);
});

Route::get('projectpaus', function () {
    return view('Projects.index',['projects'=>App\Project::where('projstatus', "Paused")
     ->get()]);
});