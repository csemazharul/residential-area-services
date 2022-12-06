<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Throwable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $page_title = 'Category List';
        return view('admin.category.index', compact('categories', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Category Create";
        return view('admin.category.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $requestData = $request->all();
            if (!empty($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->storeAs('uploads', $imageName);
                $requestData['image'] = $imageName;
            }
            $requestData['status'] = $request->status === 'on' ? 1 : 0;
            Category::create($requestData);
            return back()->with('success', 'You have successfully service category.');
        } catch (Throwable $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        $page_title="Category Edit";
        $category = Category::find($category->id);
        return view('admin.category.edit', compact('category', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        #category update
    
        try {
            $requestData = $request->only('name', 'status');
            if (!empty($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->storeAs('uploads', $imageName);
                $requestData['image'] = $imageName;
            }
            $path = storage_path().'/uploads/'.$category->image;
                if(File::exists($path)){
                    unlink($path);
                }
            $requestData['status'] = $request->status === 'on' ? 1 : 0;
            Category::where('id', $category->id)->update($requestData);
            return redirect()->route('admin.categories.index');
        } catch (Throwable $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
