<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
  
    public function add()
    {
      return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
      $this->validate($request, Profile::$rules);
      
      $profile = new profile;
      $form = $request->all();
      
      unset($form['_token']);
      
      $profile->fill($form);
      $profile->save();
      
      return redirect('admin/profile/create');
    }
    public function edit(Request $request)
    {
      $profile = Profile::find($request->id);
      if (empty($request)) {
        abort(404);
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    public function update(Request $request)
    { 
      $this->validate($request, Profile::$rules);
      $profile = Profile::find($request->id);
      $profile_form = $request->all();
      
      unset($profile_form['_token']);
      $profile->fill($profile_form)->save();
      
      return view('admin.profile.edit', ['profile_form' => $profile]);
    }
}
  


