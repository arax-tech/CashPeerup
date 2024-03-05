<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Category;
use App\Apply;
use App\Loan;
use App\ApplyLoan;
use Auth;
class ApplyLoanController extends Controller
{
    public function index(Request $request)
    {
        
        $allloans = Loan::orderBy('id', 'DESC')->get();
        $loans = ApplyLoan::where('user_id', auth::user()->id)->orderBy('id', 'DESC')->get();
    	return view('user.apply-loan.index', compact('loans', 'allloans'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
		$apply = new ApplyLoan();
        $apply->user_id = auth::user()->id;
        $apply->loan_id = $request->loan;
        $apply->name = $request->name;
        $apply->state = $request->state;
        $apply->city = $request->city;
        $apply->zip = $request->zip;
        $apply->dob = $request->dob;
        $apply->gender = $request->gender;
        $apply->address = $request->address;
        $apply->amount = $request->amount;
        $apply->status = 'Pending';


        $loan = Loan::find($request->loan);
        // dd($loan->loan_title);
        $details = [
                'loan_type' => $loan->loan_title,
                'name' => $request->name,
                'state' => $request->state,
                'city' => $request->city,
                'zip' => $request->zip,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'address' => $request->address,
                'amount' => $request->amount,
                'state' => 'Pending'
            ];
           
        Mail::to('brainstrikes@yahoo.com')->send(new \App\Mail\NotificationMail($details));

         if ($request->hasFile('identification')) 
        {
            $file1 = $request->identification->getClientOriginalName();
            $request->identification->storeAs('/user/identification/', $file1, 'my_files');
            $apply->identification = $file1;
        }
        else
        {
            $apply->identification = '';
        }



        if ($request->hasFile('recent_image')) 
        {
            $file2 = $request->recent_image->getClientOriginalName();
            $request->recent_image->storeAs('/user/apply/', $file2, 'my_files');
            $apply->recent_image = $file2;
        }
        else
        {
            $apply->recent_image = '';
        }




		$apply->save();
		return redirect()->back()->with('flash_message_success', 'Apply Successfully');   	
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $apply = ApplyLoan::find($id);
        $apply->loan_id = $request->loan;
        $apply->name = $request->name;
        $apply->state = $request->state;
        $apply->city = $request->city;
        $apply->zip = $request->zip;
        $apply->dob = $request->dob;
        $apply->gender = $request->gender;
        $apply->address = $request->address;
        $apply->amount = $request->amount;



         if ($request->hasFile('identification')) 
        {
            $file1 = $request->identification->getClientOriginalName();
            $request->identification->storeAs('/user/identification/', $file1, 'my_files');
            $apply->identification = $file1;
        }
        else
        {
            $apply->identification = $request->previous_identification;
        }


        if ($request->hasFile('recent_image')) 
        {
            $file2 = $request->recent_image->getClientOriginalName();
            $request->recent_image->storeAs('/user/apply/', $file2, 'my_files');
            $apply->recent_image = $file2;
        }
        else
        {
            $apply->recent_image = $request->previous_recent_image;
        }


        $apply->save();
        return redirect()->back()->with('flash_message_success', 'Apply Update Successfully');   
    }

    public function delete($id)
    {
        ApplyLoan::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Application Delete Successfully');    
    }
}
