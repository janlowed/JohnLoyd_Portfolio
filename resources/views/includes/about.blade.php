@extends('layouts.homelayout')
@section('title', 'About')
@section('content')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">About</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">About</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                {{-- <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Log out</span>
              <form id="logout-form" action="{{ route('logout') }}"  method="POST" class="d-none"> --}}
                @csrf
                {{-- </form>
            </a>
          </li>
          </li>
        </ul> --}}
            </div>
        </div>
    </nav>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">people</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">About</p>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
        @if(Auth::user()->role === 'admin')
        <a class="btn btn-primary col-2" href="{{ route('abouts.create') }}">Add About</a>
        @endif
    </div>

    <div class="card-body px-0 pb-2">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Birthday</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Zipcode
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $about)
                        <tr>
                            {{-- <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ ++$i }}</h6>
                                    </div>
                                </div>
                            </td> --}}
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $about->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $about->birthday }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $about->address }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $about->zipcode }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $about->email }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $about->phone }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        @if(Auth::user()->role === 'admin')
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('abouts.edit', $about->id) }}">Edit</a>
                                            @endif
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('abouts.edit', $abouts->id) }}" method="POST">
                                    @csrf
                                    @method('UPDATE')
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            @if(Auth::user()->role === 'admin')
                                            <button type="submit" class="btn btn-sm">Edit</a>
                                                @endif
                                        </div>
                                    </div>
                            </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
@section('script')


@endsection
