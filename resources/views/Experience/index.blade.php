@extends('layouts.homelayout')

@section('content')

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Experience</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('experiences.create') }}"> Create Experience</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Year</th>
            <th>Detail</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($experiences as $experience)
        <tr>
            <td>{{ $experience->id }}</td>
            <td>{{ $experience->title }}</td>
            <td>{{ $experience->year }}</td>
            <td>{{ $experience->detail }}</td>
            <td> @if ($experience->image)
                <img src="{{'storage/' . $experience->image}}" alt="" style="width: 50px; height:50px;">
                @else
                <img src="assets/img/je.jpg" alt="" style="width: 50px; height:50px;">
                @endif</td>
            <td>
                <form action="{{ route('experiences.destroy',$experience->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('experiences.edit',$experience->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Want to Delete this Experience Attachment?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>

@endsection