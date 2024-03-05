<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Loan;
use App\ApplyLoan;
use App\Withdraw;
use Auth;
class AdminController extends Controller
{
    public function dashboard()
    {

        error_reporting(0);
        $loan = Loan::count();
        $loanApplication = ApplyLoan::count();
        $loanWithdraw = Withdraw::count();
        $user = User::where('role', 'User')->count();
        return view('admin.dashboard', compact('loan', 'loanApplication', 'loanWithdraw', 'user'));
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
                $request->profile->storeAs('/admin/profile/', $file1, 'my_files');
                $user->image = $file1;
            }
            else
            {
                $user->image = $user->image;
            }
    		
    		$user->save();
    		return redirect()->back()->with('flash_message_success', 'Profile Update Successfully');

    	}
    	return view('admin.profile');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/admin')->with('flash_message_success', 'Logout Successfully...');
    }
}
