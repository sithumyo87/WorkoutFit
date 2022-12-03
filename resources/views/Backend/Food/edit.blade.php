@extends('Backend.master')
@section('title','Blog')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Edit Blog Form</h4></div>
        <div class="card-body">
            <form action="{{route('bfood.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @if(session('msg'))
                    <div class="alert alert-dismissible fade show alert-success" role="alert"  id="customxD">
                        <strong>{{session('msg')}}</strong>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">title </label>
                    <input type="text" placeholder="Enter Your Blog Title" class="form-control text-white" name="title" value="{{$blog->title}}" >
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="summary-ckeditor" cols="30" rows="10" class="form-control text-white" >{!! $blog->description !!}</textarea> 
                </div>
                <label for="category_id"> Category</label>
                <select name="category_id" id="" class="form-control mt-3 text-white">      
                <option value="">Choose Category</option>
                    @foreach($categories as $c)
                    <option value="{{$c->id}}" <?php if($c->id == $blog->category_id) echo "selected"?>>{{$c->name}}</option>
                    @endforeach
                </select>
                <div class="form-group ">
                    <label for="image">Image</label>
                    <input type="file"  name="image"class="form-control text-white" name="image" accept="image/*">
                </div>
                <div>
                    <img src="{{Storage::url($blog->image)}}" width="140px" alt="" class="mt-3">
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Update</i></button>
            </form>
        </div>
    </div>
@endsection
