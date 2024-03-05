<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Category;
use App\Apply;
use App\Loan;
use App\Withdraw;
use App\ApplyLoan;
use Auth;
class WithdrawController extends Controller
{
    public function index(Request $request)
    {
        error_reporting(0);
        $withdraws = Withdraw::where('user_id' , auth::user()->id)->orderBy('id', 'DESC')->get();
    	return view('user.withdraw.index', compact('withdraws'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
		$withdraw = new Withdraw();
        $withdraw->user_id = auth::user()->id;
        $withdraw->method = $request->method;
        $withdraw->name = $request->name;
        $withdraw->state = $request->state;
        $withdraw->city = $request->city;
        $withdraw->zip = $request->zip;
        $withdraw->dob = $request->dob;
        $withdraw->gender = $request->gender;
        $withdraw->amount = $request->amount;
        $withdraw->status = 'Pending';


        if ($request->hasFile('identification')) 
        {
            $file1 = $request->identification->getClientOriginalName();
            $request->identification->storeAs('/user/identification/', $file1, 'my_files');
            $withdraw->identification = $file1;
        }
        else
        {
            $withdraw->identification = '';
        }


        if ($request->hasFile('recent_image')) 
        {
            $file2 = $request->recent_image->getClientOriginalName();
            $request->recent_image->storeAs('/user/withdraw/', $file2, 'my_files');
            $withdraw->recent_image = $file2;
        }
        else
        {
            $withdraw->recent_image = '';
        }

		$withdraw->save();
		return redirect()->back()->with('flash_message_success', 'Withdraw Requested Success');   	
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $withdraw = Withdraw::find($id);
        $withdraw->method = $request->method;
        $withdraw->name = $request->name;
        $withdraw->state = $request->state;
        $withdraw->city = $request->city;
        $withdraw->zip = $request->zip;
        $withdraw->dob = $request->dob;
        $withdraw->gender = $request->gender;
        $withdraw->amount = $request->amount;


        if ($request->hasFile('identification')) 
        {
            $file1 = $request->identification->getClientOriginalName();
            $request->identification->storeAs('/user/identification/', $file1, 'my_files');
            $withdraw->identification = $file1;
        }
        else
        {
            $withdraw->identification = $request->previous_identification;
        }

        
        if ($request->hasFile('recent_image')) 
        {
            $file2 = $request->recent_image->getClientOriginalName();
            $request->recent_image->storeAs('/user/withdraw/', $file2, 'my_files');
            $withdraw->recent_image = $file2;
        }
        else
        {
            $withdraw->recent_image = $request->previous_recent_image;
        }

        $withdraw->save();
        return redirect()->back()->with('flash_message_success', 'Withdraw Update Successfully');   
    }

    public function delete($id)
    {
        Withdraw::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Withdraw Delete Successfully');    
    }
}
