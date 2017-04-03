<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Image;
use Auth;

class ProfileController extends Controller
{
    public function profile($username)
    {
    	$user = User::whereUsername($username)->first();
    	return view('user.profile', compact('user'));
    }
    public function update_avatar(Request $request){

    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/images/' . $filename ) );

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	}
    	$id = Auth::user()->id;
    	$user = User::findOrFail($id);
        return view('user.edit');
    }

}
