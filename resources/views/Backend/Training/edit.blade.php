@extends('Backend.master')
@section('title','gallery')
@section('content')
//edit
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Edit Training Form</h4></div>
        <div class="card-body">
            <form action="{{route('btraining.update',$training->id)}}" method="post" enctype="multipart/form-data">
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
                    <input type="text" placeholder="Enter Your training Title" class="form-control text-white" name="name" value="{{$training->name}}" >
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="summary-ckeditor" cols="30" rows="10" class="form-control text-white" >{!! $training->description !!}</textarea> 
                </div>
                <label for="training_id">Category</label>
                <select name="training_id" id="" class="form-control mt-3 text-white">      
                <option value="">Choose Category</option>
                    @foreach($trainingcat as $t)
                    <option value="{{$t->id}}" <?php if($t->id == $training->training_id) echo "selected"?>>{{$t->name}}</option>
                    @endforeach
                </select>

                <br>
                <div class="form-group">
                    <label for="video">Video Link </label>
                    <input type="text" placeholder="Enter Your Video Link From You Tube" class="form-control text-white" name="video" value="{{$training->video}}">
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Update</i></button>
            </form>
        </div>
    </div>
@endsection
