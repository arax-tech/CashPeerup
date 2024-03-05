<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->isMethod("POST"))
    	{
    		// dd($request->all());
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => "Admin"]))
            {
                return redirect('/admin/dashboard');
            }

            else
            {
                return redirect()->back()->with('flash_message_error', 'Invalid Email OR Password, Please try Again...');
            }    		
    	}

        

    	return view('admin.login');
    }

    
}
