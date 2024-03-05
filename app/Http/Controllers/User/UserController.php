<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\ApplyLoan;
use App\Withdraw;
use Carbon\Carbon;
use Auth;
class UserController extends Controller
{
    public function dashboard()
    {

        $loan = ApplyLoan::where('user_id', auth::user()->id)->count();
        $withdraw = Withdraw::where('user_id', auth::user()->id)->count();
        return view('user.dashboard', compact('loan', 'withdraw'));
    }

    public function profile(Request $request)
    {
    	if ($request->isMethod('POST'))
    	{

            // dd($request->all());
    		$id = Auth::User()->id;

    		$user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->country = $request->country;
            $user->city = $request->city;
    		$user->address = $request->address;

            
            if (!empty($request->password))
            {
                $user->password = Hash::make($request->password);
            }


            if ($request->hasFile('profile')) 
            {
                $file1 = $request->profile->getClientOriginalName();
                $request->profile->storeAs('/user/profile/', $file1, 'my_files');
                $user->image = $file1;
            }
            else
            {
                $user->image = $user->image;
            }
    	
    		$user->save();
    		return redirect()->back()->with('flash_message_success', 'Profile Update Successfully');

    	}
    	return view('user.profile');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login')->with('flash_message_success', 'Logout Successfully...');
    }
}
