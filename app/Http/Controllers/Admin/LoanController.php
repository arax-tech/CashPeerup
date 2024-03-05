<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Category;
use App\Loan;
use Auth;
class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::orderBy('id', 'DESC')->get();
    	return view('admin.loan.index', compact('loans'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
		$loan = new Loan();
        $loan->loan_title = $request->loan_title;
        $loan->loan_description = $request->loan_description;

        if ($request->hasFile('loan_image')) 
        {
            $file1 = $request->loan_image->getClientOriginalName();
            $request->loan_image->storeAs('/admin/loan/', $file1, 'my_files');
            $loan->loan_image = $file1;
        }
        else
        {
            $loan->loan_image = '';
        }

        

		$loan->save();
		return redirect()->back()->with('flash_message_success', 'Loan Added Successfully');   	
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        // $product = Product::find($id);
        $loan = Loan::find($id);
        $loan->loan_title = $request->loan_title;
        $loan->loan_description = $request->loan_description;

        if ($request->hasFile('loan_image')) 
        {
            $file1 = $request->loan_image->getClientOriginalName();
            $request->loan_image->storeAs('/admin/loan/', $file1, 'my_files');
            $loan->loan_image = $file1;
        }
        else
        {
            $loan->loan_image = $loan->loan_image;
        }

        

        $loan->save();
        return redirect()->back()->with('flash_message_success', 'Loan Update Successfully');     
    }

    public function delete($id)
    {
        Loan::find($id)->delete();
        return redirect()->back()->with('flash_message_error', 'Loan Delete Successfully');    
    }
}
