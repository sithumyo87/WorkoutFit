@extends('Backend.master')
@section('title','Food BLog')
@section('content')

<div class="col-md-12 mt-5 ">

    @if(session('msg'))
    <div class="alert alert-dismissible fade show alert-success" role="alert" id="customxD">
        <strong>{{session('msg')}}</strong>
        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="form-group">
        <a href="{{route('bfood.create')}}"><button class="btn btn-primary "><i
                    class="mdi mdi-plus-circle-outline text-white">
                </i> Add Blog</button></a>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered ">
        <tr>
            <th class="text-center">Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Blog category</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
     
        @foreach($blogs as $key=>$row)
        <tr>
            <td class="text-center">{{ $key+ $blogs->firstItem() }}</td>
            <td>{{$row->title}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->food_category->name}}</td>
            <td>
                <div>
                    <img src="{{Storage::url($row->image)}}" alt="">
                </div>
            </td>
            <td>
                
                <form action="{{route('bblog.destroy',$row->id)}}" method="post">
                @csrf
                           @method('DELETE')
                           <a href="{{ route('bfood.edit',$row->id)}}"><i class="mdi mdi-square-edit-outline">
                    </i></a>
                        <a href=""><button type="submit" class="btn btn-md" onclick="return confirm('Are you sure to delete?')"><i class="mdi mdi-trash-can-outline text-danger"></i></button></a>
            </td>
            </form>
        </tr>
        @endforeach

    </table>
</div>
    <br>
    <div class="d-flex ">
        {!! $blogs->links() !!}
    </div>
</div>
@endsection

