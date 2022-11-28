@extends('Backend.master')
@section('title','Gallery')
@section('content')

<div class="col-md-12 mt-5 ">

    @if(session('msg'))
                <div class="alert alert-dismissible fade show alert-success" role="alert"  id="customxD">
                    <strong>{{session('msg')}}</strong>
                    <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
<div class="form-group">
<button class="btn btn-primary "><a href="{{route('bgallery.create')}}"><i class="mdi mdi-plus-circle-outline text-white">
                </i></a> Add Gallery</button>
</div>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <div>
                    <img src="https://d33wubrfki0l68.cloudfront.net/ccca4f8b8267686e69402de14e07423c7f3f6d70/4f979/img/blog/full-stack-software-design/banner.png"
                        alt="">
                </div>
            </td>
            <td>
                <a href=""><i class="mdi mdi-square-edit-outline">
                </i></a>
                <a href=""><i class="mdi mdi-trash-can-outline">
                </i></a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>
                <div>
                    <img src="https://user-images.githubusercontent.com/6892666/65833569-bb34fc00-e29f-11e9-8516-79cbd9f8f07b.png"
                        alt="">
                </div>
            </td>
            <td>
                <a href=""><i class="mdi mdi-square-edit-outline">
                </i></a>
                <a href=""><i class="mdi mdi-trash-can-outline">
                </i></a></td>
        </tr>
    </table>
</div>
@endsection