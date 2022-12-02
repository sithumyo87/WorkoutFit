<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\TrainingCategory;
use App\Http\Controllers\Controller;

class TrainingCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        
        $tc = TrainingCategory::where('disable',0)->latest()->paginate(5);
        // dd($gallery);
        return view('Backend.TrainingCategory.index',compact('tc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.TrainingCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TrainingCategory::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('trainingcat.index')->with('msg','Successfully Inserted');
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
        $tc = TrainingCategory::findOrFail($id);
        return view('Backend.TrainingCategory.edit',compact('tc'));
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
        $tc = TrainingCategory::find($id);
        $blog->name = $request->name;
        $blog->save();
        return redirect()->route('btrainingcat.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tc = TrainingCategory::findOrFail($id);
        $tc->disable = 1;
        $tc->save();
        return redirect()->route('trainingcat.index')->with('msg','Successfully Deleted');
    }
}
