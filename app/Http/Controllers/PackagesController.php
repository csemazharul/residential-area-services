<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Packages::with('category')->where('provider_id', Auth::user()->id)->paginate(5);
        return view('service-provider.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('service-provider.packages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['provider_id'] = Auth::user()->id;
        $save = Packages::create($data);

        if ($save) {
            return redirect()->route('packages.index')->with('success', 'Package Added Successfully');
        } else {
            return redirect()->route('packages.index')->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function show(Packages $packages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function edit(Packages $package)
    {
        $categories= Category::all();
        return view('service-provider.packages.edit', compact('package', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packages $packages)
    {
        //update package in database
        // $update = $packages->update($request->all());
        // return $packages;
        $package= Packages::find($request->id);
        $package->name = $request->name;
        $package->category_id = $request->category_id;
        $package->price = $request->price;
        $package->provider_id = Auth::user()->id;
        $update = $package->save();

        if ($update) {
            // return redirect()->back()->with('success', 'Package Updated Successfully');
            return redirect()->route('packages.index')->with('success', 'Package Updated Successfully');
        } else {
            //return package index page
            return redirect()->route('packages.index')->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Packages  $packages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packages $packages)
    {
        //delete packages
        $delete = $packages->delete();
        if ($delete) {
            return redirect()->route('packages.index')->with('success', 'Package Deleted Successfully');
        } else {
            return redirect()->route('packages.index')->with('error', 'Something went wrong');
        }
    }
}
