@extends('Backend.master')
@section('title','TrainingCategory')
@section('content')

<div class="col-md-12 mt-5 ">

    @if(session('msg'))
    <div class="alert alert-dismissible fade show alert-success" role="alert" id="customxD">
        <strong>{{session('msg')}}</strong>
        <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="form-group">
        <a href="{{route('blogcat.create')}}"><button class="btn btn-primary "><i
                    class="mdi mdi-plus-circle-outline text-white">
                </i> Add Blog Category</button></a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Id</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
     
        @foreach($bc as $key=>$row)
        <tr>
            <td class="text-center">{{ $key+ $bc->firstItem() }}</td>
            <td>{{$row->name}}</td>
            <td>
                
                <form action="{{route('blogcat.destroy',$row->id)}}" method="post">
                @csrf
                           @method('DELETE')
                          <a href="{{ route('blogcat.edit',$row->id)}}"><i class="mdi mdi-square-edit-outline">
                    </i></a>
                        <a href=""><button type="submit" class="btn btn-md" onclick="return confirm('Are you sure to delete?')"><i class="mdi mdi-trash-can-outline text-danger"></i></button></a>
            </td>
            </form>
        </tr>
        @endforeach

    </table>
    <br>
    <div class="d-flex ">
        {!! $bc->links() !!}
    </div>
</div>
@endsection