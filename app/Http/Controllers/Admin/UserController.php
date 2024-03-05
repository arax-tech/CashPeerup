<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role', 'User')->orderBy('id', 'DESC')->get();
    	return view('admin.user.index', compact('users'));
    }

    
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'User Delete Successfully');    
    }
}
