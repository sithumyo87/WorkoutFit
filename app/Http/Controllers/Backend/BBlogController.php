<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $blogs = Blog::where('disable',0)->latest()->paginate(5);
        // dd($gallery);
        return view('Backend.Blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::where('disable',0)->get();
        return view('Backend.Blog.create',compact('categories'));
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
        Blog::create([
            'name'=>$request->name,
            'description' => $request->description,
            'category_id' =>$request->category_id,
            'image' => $path,
        ]);
        return redirect()->route('bblog.index')->with('msg','Successfully Inserted');
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
        $blog = Blog::findOrFail($id);
        return view('Backend.Blog.edit',compact('blog','categories'));
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
        $blog = Blog::find($id);
        if($request->has('image')){
            $path = $request->image->store('public/blog');
        }else{
            $path = $blog->image;
        }
        $blog->image = $path;
        $blog->save();
        return redirect()->route('bblog.index')->with('msg','Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->disable = 1;
        $blog->save();
        return redirect()->route('bblog.index')->with('msg','Successfully Deleted');
    }
}
