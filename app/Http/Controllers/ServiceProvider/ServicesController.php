<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Divisions;
use App\Models\serviceDetails;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::with('serviceDetails', 'category')->paginate(5);

        return view('service-provider.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Divisions::all();
        $categories = Category::all();
        $page_title ="Add Service";
        return view('service-provider.services.create', compact('divisions', 'categories', 'page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicdData=$request->only(
            'category_id',
            'service_provider_id',
            'division_id',
            'district_id',
            'upazila_id',
            'union_id',
            'status',
        );

        $servicdData['service_provider_id'] = auth()->user()->id;

        $files = $request->image;
        $images = null;
        if (is_array($files)) {
            foreach ($files as $file) {
                if (!empty($file)) {
                    $imageName = uniqid().'.'.$file->extension();
                    $file->storeAs('/public/uploads/', $imageName);
                    $images[] = $imageName;
                }
            }
        } else {
            if (!empty($files)) {
                $imageName = uniqid().'.'.$files->extension();
                $files->storeAs('/public/uploads/', $imageName);
                $images = $imageName;
            }
        }
        $serviceCreated = Services::create($servicdData);

        $serviceDetails = $request->only(
            'price_type',
            'name',
            'price',
            'short_description',
            'description',
        );
        $serviceDetails['service_id'] = $serviceCreated->id;
        $serviceDetails['image'] = is_array($images) ? json_encode($images) : $images;

        $save = DB::table('service_details')->insert($serviceDetails);
        if ($save) {
            return redirect()->route('services.create')->with('success', 'Service Added Successfully');
        } else {
            return redirect()->route('services.create')->with('error', 'Service Added Failed');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::with('serviceDetails')->find($id);
        $divisions = Divisions::all();
        $categories = Category::all();
        $districts = DB::table('districts')->where('division_id', $service->division_id)->get();
        $upazilas = DB::table('upazilas')->where('district_id', $service->district_id)->get();
        $unions = DB::table('unions')->where('upazila_id', $service->upazila_id)->get();
        return view('service-provider.services.edit', compact('divisions', 'categories', 'service', 'districts', 'upazilas', 'unions'));
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
        $service = Services::find($id);

        $servicDetail = serviceDetails::where('service_id', $id)->first();

        $files = $request->file('image');

        if (!empty($servicDetail->image) && !empty($files)) {
            $oldImages = json_decode($servicDetail->image);
            if (!empty($oldImages)) {
                if (is_array($oldImages)) {
                    foreach ($oldImages as $oldImage) {
                        if (file_exists(public_path('/uploads'.$oldImage))) {
                            unlink(public_path('/uploads'), $oldImage);
                        }
                    }
                } else {
                    if (file_exists(public_path('/uploads'.$oldImages))) {
                        unlink(public_path('/uploads'), $oldImages);
                    }
                }
            }
        }

        $images = null;

        if (is_array($files)) {
            foreach ($files as $file) {
                if (!empty($file)) {
                    $imageName = uniqid().'.'.$file->extension();
                    // $file->storeAs('/public/uploads/', $imageName);
                    $file->move(public_path('/uploads'), $imageName);

                    $images[] = $imageName;
                }
            }
        } else {
            if (!empty($files)) {
                $imageName = uniqid().'.'.$files->extension();
                // $files->storeAs('/public/uploads/', $imageName);
                $files->move(public_path('/uploads'), $imageName);

                $images = $imageName;
            }
        }

        $service->service_provider_id = auth()->user()->id;
        $service->category_id = $request->category_id;
        $service->division_id = $request->division_id;
        $service->district_id = $request->district_id;
        $service->upazila_id = $request->upazila_id;
        $service->union_id = $request->union_id;
        $service->save();
        //update service deatils
        $serviceDetails = $request->only(
            'price_type',
            'name',
            'price',
            'short_description',
            'description',
        );
        if (!empty($images)) {
            $serviceDetails['image'] = is_array($images) ? json_encode($images) : $images;
        }
        $serviceDetails['service_id'] = $service->id;
        $save = DB::table('service_details')->where('service_id', $id)->update($serviceDetails);
        if ($save) {
            return redirect()->route('services.index')->with('success', 'Service Updated Successfully');
        } else {
            return redirect()->route('services.index')->with('error', 'Service Updated Failed');
        }
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

    public function getUserFavoriteServices()
    {
        $favourites = Services::with('serviceDetails', 'category', 'provider', 'review')->where('user_id', auth()->user()->id)->where('is_favorite', 1)->get();
        // return $favourites;
        return view('user.favorite', compact('favourites'));
    }
}
