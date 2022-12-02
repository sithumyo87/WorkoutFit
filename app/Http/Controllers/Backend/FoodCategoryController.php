<?php

namespace App\Http\Controllers\Backend;

use App\Models\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fc = FoodCategory::where('disable',0)->latest()->paginate(5);
        // dd($gallery);
        return view('Backend.FoodCategory.index',compact('fc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.FoodCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FoodCategory::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('foodcat.index')->with('msg','Successfully Inserted');
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
        $bc = FoodCategory::findOrFail($id);
        return view('Backend.FoodCategory.edit',compact('bc'));
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
        $bc = FoodCategory::find($id);
        $bc->name = $request->name;
        $bc->save();
        return redirect()->route('foodcat.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = FoodCategory::findOrFail($id);
        $blog->disable = 1;
        $blog->save();
        return redirect()->route('foodcat.index')->with('msg','Successfully Deleted');
    }
}
