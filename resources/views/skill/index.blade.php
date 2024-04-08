@extends('layouts.homelayout')

@section('content')

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Skills</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::user()->role === 'admin')
                <a class="btn btn-success" href="{{ route('skills.create') }}"> Create Skills</a>
                @endif
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
            <th>Skillname</th>
            <th>Percentage</th>
            @if(Auth::user()->role === 'admin')
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ $skill->id }}</td>
            <td>{{ $skill->skillname }}</td>
            <td>{{ $skill->percentage }}</td>
           
            <td>
                <form action="{{ route('skills.destroy',$skill->id) }}" method="Post">
                    @if(Auth::user()->role === 'admin')
                    <a class="btn btn-primary" href="{{ route('skills.edit',$skill->id) }}">Edit</a>
                    @endif
                    @csrf
                    @method('DELETE')
                    @if(Auth::user()->role === 'admin')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Want to Delete this Skill Attachment?')">Delete</button>
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