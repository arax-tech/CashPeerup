<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Category;
use App\Apply;
use App\Loan;
use App\ApplyLoan;
use App\User;
use Auth;
class ApplyLoanController extends Controller
{
    public function index(Request $request)
    {
        
        $allloans = Loan::orderBy('id', 'DESC')->get();
        $loans = ApplyLoan::orderBy('id', 'DESC')->get();
        return view('admin.apply-loan.index', compact('loans', 'allloans'));
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
        $apply->status = $request->status;



        $userInfo = User::find($apply->user_id);
        $details = [
                'status' => $request->status
            ];
           
        // Mail::to('arhamkhaninnocent@gmail.com')->send(new \App\Mail\StatusUpdate($details));
        Mail::to($userInfo->email)->send(new \App\Mail\StatusUpdate($details));

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
