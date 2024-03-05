<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Loan;
use App\Review;
use App\Withdraw;
use App\ApplyLoan;
class HomeController extends Controller
{
    function home()
    {
    	$loans = Loan::orderBy('id', 'DESC')->get();
        return view('index', compact('loans'));
    }

    function loan()
    {
    	$loans = Loan::orderBy('id', 'DESC')->get();
        return view('loan', compact('loans'));
    }

    public function loanDetails($id)
    {
    	$loan = Loan::find($id);
    	return view('loan-details', compact('loan'));
    }

    function about()
    {
        return view('about');
    }

    function faq()
    {
        return view('faq');
    }

    function contact()
    {
        return view('contact');
    }

    public function review(Request $request)
    {
        $review = new Review;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->comment = $request->reviews;
        $review->ratings = $request->ratings;
        $review->save();
        return redirect()->back()->with('flash_message_success','Thanks for your review');
    }

    public function withdrawData()
    {
        $withdrawData = ApplyLoan::inRandomOrder()->where('status', 'Approved')->select('name','amount')->get();
        return response()->json($withdrawData);
    }

    public function returnData()
    {
        $returnData = ApplyLoan::inRandomOrder()->where('status', 'Back')->select('name','amount')->get();
        return response()->json($returnData);
    }
}
