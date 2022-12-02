@extends('Backend.master')
@section('title','Gallery')
@section('content')

<div class="col-md-12 mt-5 ">

    @if(session('msg'))
    <div class="alert alert-dismissible fade show alert-success" role="alert" id="customxD">
        <strong>{{session('msg')}}</strong>
        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="form-group">
        <a href="{{route('btraining.create')}}"><button class="btn btn-primary "><i
                    class="mdi mdi-plus-circle-outline text-white">
                </i> Add Training</button></a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Blog category</th>
            <th>Video Url</th>
            <th colspan="2">Action</th>
        </tr>
     
        @foreach($training as $key=>$row)
        <tr>
            <td class="text-center">{{ $key+ $training->firstItem() }}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->training_category->name}}</td>
            <td>{{$row->video}}</td>
            <td>
                
                <form action="{{route('btraining.destroy',$row->id)}}" method="post">
                @csrf
                           @method('DELETE')
                           <a href="{{ route('btraining.edit',$row->id)}}"><i class="mdi mdi-square-edit-outline">
                    </i></a>       
            </td>
            <td>
            <a href=""><button type="submit" class="btn btn-md" onclick="return confirm('Are you sure to delete?')"><i class="mdi mdi-trash-can-outline text-danger"></i></button></a>
            </td>
            </form>
        </tr>
        @endforeach

    </table>
    <br>
    <div class="d-flex ">
        {!! $training->links() !!}
    </div>
</div>
@endsection