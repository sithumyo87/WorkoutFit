<?php

namespace App\Http\Controllers\Backend;

use App\Models\FoodBlog;
use App\Models\FoodCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $blogs = FoodBlog::where('disable',0)->latest()->paginate(5);
        // dd($gallery);
        return view('Backend.Food.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = FoodCategory::where('disable',0)->get();
        return view('Backend.Food.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->image->store('public/blog');
        $query = FoodBlog::create([
            'title'=>$request->title,
            'description' => $request->description,
            'food_id' =>$request->category_id,
            'image' => $path,
        ]);
        
        return redirect()->route('bfood.index')->with('msg','Successfully Inserted');
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
        $categories = FoodCategory::where('disable',0)->get();
        $blog = FoodBlog::findOrFail($id);
        return view('Backend.Food.edit',compact('blog','categories'));
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
        $blog = FoodBlog::find($id);
        if($request->has('image')){
            $path = $request->image->store('public/blog');
        }else{
            $path = $blog->image;
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->food_id = $request->category_id;
        $blog->image = $path;
        $blog->save();
        return redirect()->route('bfood.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = FoodBlog::findOrFail($id);
        $blog->disable = 1;
        $blog->save();
        return redirect()->route('bfood.index')->with('msg','Successfully Deleted');
    }
}
