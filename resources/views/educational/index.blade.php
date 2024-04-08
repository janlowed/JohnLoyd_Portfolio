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
                <h2>Educational</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::user()->role === 'admin')
                <a class="btn btn-success" href="{{ route('educationals.create') }}"> Add Educational</a>
                @endif
            </div>
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Schoolname</th>
            <th>Year</th>
            <th>Address</th>
            <th>Description</th>
            @if(Auth::user()->role === 'admin')
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($educationals as $educational)
        <tr>
            <td>{{ $educational->id }}</td>
            <td>{{ $educational->schoolname }}</td>
            <td>{{ $educational->year }}</td>
            <td>{{ $educational->address}}</td>
            <td>{{ $educational->description }}</td>
           
            <td>
                <form action="{{ route('educationals.destroy',$educational->id) }}" method="Post">
                    @if(Auth::user()->role === 'admin')
                    <a class="btn btn-primary" href="{{ route('educationals.edit',$educational->id) }}">Edit</a>
                    @endif
                    @csrf
                    @method('DELETE')
                    @if(Auth::user()->role === 'admin')
                    <button type="submit" class="btn btn-danger"  onclick="return confirm('Are You Want to Delete this Educational Attachment?')">Delete</button>
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