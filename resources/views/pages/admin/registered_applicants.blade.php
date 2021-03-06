@extends('layouts.myapp')

@section('content')

    <div class="wrapper">

        @include('const.top-nav')

       {{-- this is the things that concern the employer  --}}
        @if (Auth::user()->role == 'admin')
            @include('ui.admin.side-nav')
            @include('ui.admin.registered-applicants')
        @endif
    </div>
    <!-- ./wrapper -->

@endsection
