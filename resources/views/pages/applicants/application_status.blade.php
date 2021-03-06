@extends('layouts.myapp')

@section('content')

    <div class="wrapper">

        @include('const.top-nav')

        {{-- this is the things that concern the applicant  --}}
        @if (Auth::user()->role == 'applicant')
            @include('ui.applicants.side-nav')
            @include('ui.applicants.application_status')
        @endif
    </div>
    <!-- ./wrapper -->

@endsection
