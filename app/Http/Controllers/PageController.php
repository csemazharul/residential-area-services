<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Districts;
use App\Models\Divisions;
use App\Models\Packages;
use App\Models\Review;
use App\Models\Services;
use App\Models\Unions;
use App\Models\Upazilas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{

    public function index()
    {
        // return User::where('role', 'user')->get();
        // return  Auth::user()->roles->pluck('name')->first();
        $divisions = Divisions::all();
        $categories = Category::with('services')->get();
       
        return view('welcome', compact('divisions','categories'));
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function aboutUs(){
        return view('frontend.about-us');
    }

    public function district($id){
        $districts = Districts::find($id);
        return response()->json($districts);
    }

    public function upazila($id){
        $division = Upazilas::find($id);
        return view('frontend.division', compact('division'));
    }

    public function unions($id){
        $division = Unions::find($id);
        return view('frontend.division', compact('division'));
    }

    public function categories(){
        $categories=Category::all();
        return view('frontend.category',compact('categories'));
    }

    public function allServices(){
        $categories=Category::all();
        $services = Services::with('serviceDetails','category','district','upazila')->get();

        return view('frontend.services',compact('services', 'categories'));
    }

    public function categoryServices($id){
        $categories=Category::all();
        $services = Services::with('serviceDetails','category','district','upazila')->where('category_id', $id)->get();

        return view('frontend.category-services',compact('services', 'categories'));
    }

    public function serviceDetails($id){
   
        $service = Services::with('serviceDetails','category','district','upazila', 'provider','providerDetails')->find($id);
        $reviews = Review::with('user')->where('service_id', $id)->get();
        $category = $service->category_id;
        $relatedServices = Services::with('serviceDetails','category', 'district','upazila', 'provider','providerDetails')->where('category_id', $category)->get();
       
        return view('frontend.service-details', compact('service','relatedServices','reviews'));
    }

    public function searchServiceWithLocation(Request $request){
        $divisionId = $request->division_id;
        $districtId = $request->district_id;
        $upazilaId = $request->upazila_id;
        $unionId = $request->union_id;

        $services = Services::with('serviceDetails','category', 'district','upazila', 'provider','providerDetails');
       
        
        if(!empty($divisionId)){
            $services->where('division_id', $divisionId);
        }
        if(!empty($districtId)){
            $services->where('district_id', $districtId);
        }
        if(!empty($upazilaId)){
            $services->where('upazila_id', $upazilaId);
        }
        if(!empty($unionId)){
            $services->where('union_id', $unionId);
        }
        $services = $services->get();
        return view('frontend.search-service', compact('services'));

    }

    public function addToFavorite(Request $request){
       //chekc if user is logged in
        if(!Auth::check()){
            return response()->json(['error' => 'You are not logged in', 'status'=>'errror'], 200);
        }
        $service = Services::find($request->id);
        $message = $service->is_favorite == 0 ? 'Service added to favorite' : 'Service removed from favorite';

        $service->is_favorite = $request->is_favorite == 0 ? 1:0 ;
        $service->user_id = Auth::user()->id;
        $updated = $service->save();
        if($updated){
            return response()->json(['status'=>'success','message' => $message], 200);}
        else{
            return response()->json(['errror'=>'success','message' => 'Server ERROR'], 200);
        }
        
    }
}
