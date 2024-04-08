@extends('layouts.homelayout')

@section('content')
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::user()->role === 'admin')
                <a class="btn btn-success" href="{{ route('abouts.create') }}"> Create About Yourself</a>
                @endif
            </div>
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Zipcode</th>
            <th>Email</th>
            <th>Phone</th>
            @if(Auth::user()->role === 'admin')
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($abouts as $about)
        <tr>
            <td>{{ $about->id }}</td>
            <td>{{ $about->name }}</td>
            <td>{{ $about->birthday }}</td>
            <td>{{ $about->address}}</td>
            <td>{{ $about->zipcode }}</td>
            <td>{{ $about->email }}</td>
            <td>{{ $about->phone }}</td>
           
            <td>
                <form action="{{ route('abouts.destroy',$about->id) }}" method="Post">
                    @if(Auth::user()->role === 'admin')
                    <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
                    @endif
                    @csrf
                    @method('DELETE')
                    @if(Auth::user()->role === 'admin')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Want to Delete this About Attachment?')">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        @if(Auth::user()->role === 'admin')
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
        @endif
    </div>

@endsection