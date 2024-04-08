@extends('layouts.homelayout')

@section('content')

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create Blog</a>
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
            <th>Image</th>
            <th>Content</th>
            <th>Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td> @if($blog->image)
                <img src="{{'storage/' . $blog->image}}" alt="" style="width: 50px; height:50px;">
                @else
                <img src="assets/img/je.jpg" alt="" style="width: 50px; height:50px;">
                @endif</td>
            <td>{{ $blog->content }}</td>
            <td>{{ $blog->date }}</td>
           
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Want to Delete this Blog Attachment?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>


@endsection