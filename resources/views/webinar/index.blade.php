@extends('layouts.homelayout')

@section('content')

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Webinars</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create Webinars</a>
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
            <th>Hostname</th>
            <th>Agenda</th>
            <th>Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($webinars as $webinar)
        <tr>
            <td>{{ $webinar->id }}</td>
            <td>{{ $webinar->hostname }}</td>
            <td>{{ $webinar->agenda }}</td>
            <td>{{ $webinar->date }}</td>
           
            <td>
                <form action="{{ route('webinars.destroy',$webinar->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('webinars.edit',$webinar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"  onclick="return confirm('Are You Want to Delete this Webinar Attachment?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>

@endsection