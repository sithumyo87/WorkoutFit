@extends('Backend.master')
@section('title','gallery')
@section('content')
    <div class="card mt-5 p-4">
        <div class="card-header bg-primary text-white"><h4>Edit Design Create Form</h4></div>
        <div class="card-body">
            <form action="{{route('trainingcat.update',$tc->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @if(session('msg'))
                    <div class="alert alert-dismissible fade show alert-success" role="alert"  id="customxD">
                        <strong>{{session('msg')}}</strong>
                        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Training Category </label>
                    <input type="text" placeholder="eg.chest" class="form-control text-white" name="name" value="{{$tc->name}}" >
                </div>
                <button class="btn btn-primary mt-3"><i class="fas fa-paper-plane">Update</i></button>
            </form>
        </div>
    </div>
@endsection
