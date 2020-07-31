@extends('layouts.myapp')

@section('content')

    <div class="wrapper">

        @include('const.top-nav')

       {{-- this is the things that concern the employer  --}}
        @if (Auth::user()->role == 'employer')
            @include('ui.employers.side-nav')
            @include('ui.employers.contact-us')
        @endif
    </div>
    <!-- ./wrapper -->

@endsection
