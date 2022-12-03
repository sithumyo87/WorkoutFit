@extends('Backend.master')
@section('title','Food Blog')
@section('content')


<div class="col-md-12 mt-5 ">
    <form action="{{route('bfood.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <fieldset>
            <legend>Create Blog</legend>
            <div class="col-md-6">
            <div class="form-group">
                    <label for="title">title </label>
                    <input type="text" placeholder="Enter Your Blog Title" class="form-control text-white" name="title" >
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="summary-ckeditor" cols="30" rows="10" class="form-control text-white"></textarea>
                </div>

                <label for="category_id">Blog Category</label>
                <select name="category_id" id="" class="form-control mt-3 text-white">      
                <option value="">Choose Category</option>
                    @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>

                <div class="form-group mt-3">
                    <label for="image">Image </label>
                    <input type="file" placeholder="Enter Your Image Url" class="form-control text-white" name="image" accept="image/*">
                </div>
            </div>
            <div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </div>
        </fieldset>
    </form>
</div>
@endsection