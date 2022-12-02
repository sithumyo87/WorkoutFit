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
        <a href="{{route('foodcat.create')}}"><button class="btn btn-primary "><i
                    class="mdi mdi-plus-circle-outline text-white">
                </i> Add Food Category</button></a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Id</th>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach($fc as $key=>$row)
        <tr>
            <td class="text-center">{{ $key+ $fc->firstItem() }}</td>
            <td>{{$row->name}}</td>
            <td> <a href="{{ route('foodcat.edit',$row->id)}}"><i class="mdi mdi-square-edit-outline">
                    </i></a></td>
            <td>

                <form action="{{route('foodcat.destroy',$row->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <a href=""><button type="submit" class="btn btn-md"
                            onclick="return confirm('Are you sure to delete?')"><i
                                class="mdi mdi-trash-can-outline text-danger"></i></button></a>
            </td>

            </form>
        </tr>
        @endforeach

    </table>
    <br>
    <div class="d-flex ">
        {!! $fc->links() !!}
    </div>
</div>
@endsection