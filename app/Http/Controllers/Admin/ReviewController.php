<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
 

    public function index()
    {
        $reviews = Review::get();
    	return view('admin.review.index', compact('reviews'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $review = Review::find($id);
        $review->name = $request->name;
        $review->email = $request->email;
        $review->comment = $request->comment;
        $review->ratings = $request->ratings;
        $review->created_at = $request->created_at;
        $review->save();
        return redirect()->back()->with('flash_message_success','Review Update Successfully');
    }
    public function delete ($id)
    {
        Review::find($id)->delete();
        return redirect()->back()->with('flash_message_success','Review Delete Successfully');
    }

    
}
