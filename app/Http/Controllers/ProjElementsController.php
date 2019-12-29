<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\UploadTrait;
class ProjElementsController extends Controller
{
   public function imagevalidation(Request $request)
   {


// Form validation
$request->validate([
    'name'              =>  'required',
    'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
]);





    return view('newproject');
   }
}