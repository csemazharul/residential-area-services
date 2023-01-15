<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $request->validate([
        //     'review' => 'required',
        //     'rating' => 'required',

        // ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = $request->all();
        $save = Review::create($review);

        if($save){
            return redirect()->back()->with('success','Thank you for your review !');
        }else{
            return redirect()->back()->with('error','Review Not Added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function userReviews(){
        $reviews = Review::with('serviceDetails')->where('user_id',auth()->user()->id)->paginate(5);
        return view('user.reviews',compact('reviews'));
    }

    public function serviceProviderReviews(){
        $reviews = Review::with('provider', 'serviceDetails')->where('provider_id',auth()->user()->id)->paginate(5);
        return view('service-provider.reviews',compact('reviews'));
    }

    public function allReviews(){
        $reviews = Review::with('provider', 'serviceDetails', 'user')->paginate(5);
        return view('admin.reviews',compact('reviews'));
    }
}
