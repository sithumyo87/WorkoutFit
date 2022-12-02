@extends('Backend.master')
@section('title','Gallery')
@section('content')

//create

<div class="col-md-12 mt-5 ">
    <form action="{{route('btraining.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <fieldset>
            <legend>Create Training</legend>
            <div class="col-md-6">
            <div class="form-group">
                    <label for="name">title </label>
                    <input type="text" placeholder="Enter Your Training Title" class="form-control text-white" name="name" >
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <textarea name="description" id="summary-ckeditor" cols="30" rows="10" class="form-control text-white"></textarea>
                </div>

                <label for="training_id">Training Category</label>
                <select name="training_id" id="" class="form-control mt-3 text-white">      
                <option value="" disabled="disabled" selected="selected">Choose Category</option>
                    @foreach($trainingcat as $t)
                    <option value="{{$t->id}}">{{$t->name}}</option>
                    @endforeach
                </select>
                <br>
                <div class="form-group">
                    <label for="video">Video Link </label>
                    <input type="text" placeholder="Enter Your Video Link From You Tube" class="form-control text-white" name="video" >
                </div>

            </div>
            <div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </div>
        </fieldset>
    </form>
</div>
@endsection