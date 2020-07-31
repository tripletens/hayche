@extends('layouts.myapp')

@section('content')

    <div class="wrapper">

        @include('const.top-nav')

        {{-- this is the things that concern the applicant  --}}
        @if (Auth::user()->role == 'applicant')
            @include('ui.applicants.side-nav')
            @include('ui.applicants.dashboard')
        @endif

        {{-- this is the things that concern the employer  --}}
        @if (Auth::user()->role == 'employer')
            @include('ui.employers.side-nav')
            @include('ui.employers.dashboard')
        @endif

        {{-- this is the things that concern the admin  --}}
        @if (Auth::user()->role == 'admin')
            @include('ui.admin.side-nav')
            @include('ui.admin.dashboard')
        @endif




    </div>
    <!-- ./wrapper -->

@endsection
