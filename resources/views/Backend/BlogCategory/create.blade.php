@extends('Backend.master')
@section('title','Gallery')
@section('content')


<div class="col-md-12 mt-5 ">
    <form action="{{route('blogcat.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <fieldset>
            <legend>Create BlogCategory</legend>
            <div class="col-md-6">
            <div class="form-group">
                    <label for="name">title </label>
                    <input type="text" placeholder="Enter Your Blog Category Title" class="form-control text-white" name="name" >
                </div>
            </div>
            <div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Submit</i></button>
            </div>
        </fieldset>
    </form>
</div>
@endsection