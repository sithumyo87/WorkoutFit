<?php

namespace App\Http\Controllers\Backend;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\TrainingCategory;
use App\Http\Controllers\Controller;

class BTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $training = Training::where('disable',0)->latest()->paginate(5);
        // dd($gallery);
        return view('Backend.Training.index',compact('training'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainingcat = TrainingCategory::where('disable',0)->get();
        return view('Backend.Training.create',compact('trainingcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Training::create([
            'name'=>$request->name,
            'description' => $request->description,
            'training_id' =>$request->training_id,
            'video' => $request->video,
        ]);
        return redirect()->route('btraining.index')->with('msg','Successfully Inserted');
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
        $training = Training::findOrFail($id);
        $trainingcat = TrainingCategory::where('disable',0)->get();
        return view('Backend.Training.edit',compact('training','trainingcat'));
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
        $t = Training::find($id);
        $t->name = $request->name;
        $t->description = $request->description;
        $t->training_id = $request->training_id;
        $t->video = $request->video;
        $t->save();
        return redirect()->route('btraining.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tc = Training::findOrFail($id);
        $tc->disable = 1;
        $tc->save();
        return redirect()->route('btraining.index')->with('msg','Successfully Deleted');
    }
}
