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



// Check if a profile image has been uploaded
if ($request->has('profile_image')) {
    // Get image file
    $image = $request->file('profile_image');
    // Make a image name based on user name and current timestamp
    $name = Str::slug($request->input('name')).'_'.time();
    // Define folder path
    $folder = '/images/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    // Upload image
    $this->uploadOne($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
   // $user->profile_image = $filePath;
}
// Persist user record to database
$user->save();

// Return user back and show a flash message
return redirect()->back()->with(['status' => 'Profile updated successfully.']);
}


















    return view('newproject');
   }
}
