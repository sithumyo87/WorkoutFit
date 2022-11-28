@extends('Backend.master')
@section('title','Gallery')
@section('content')


<div class="col-md-12 mt-5 ">
    <form action="{{route('bgallery.store')}}" method="post">
    @csrf
        <fieldset>
            <legend>Create Gallery</legend>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="text" placeholder="Enter Your Image Url" class="form-control text-white" name="name">
                </div>
            </div>
            <div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </div>
        </fieldset>
    </form>
</div>
@endsection