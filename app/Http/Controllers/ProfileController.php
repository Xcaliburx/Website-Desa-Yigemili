<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function view(){
        $profiles = Profile::all();
        return view('profile', compact('profiles'));
    }

    public function create(){
        return view('create_profile');
    }

    public function edit($id){
        $profile = Profile::findOrFail($id);
        return view('edit_profile', compact('profile'));
    }

    public function update(Request $request, $id){
        Profile::findOrFail($id)->update([
            'visi' => $request->profile_visi,
            'misi' => $request->profile_misi,
            'gambaran_umum' => $request->profile_gambaran,
            'sejarah' => $request->profile_sejarah
        ]);
        return redirect('/profile');
    }

}
