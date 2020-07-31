@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
        <main class="page-content">
            <section style="background-image: url('{{ asset('landing/images/about_home_hayche.jpg') }}');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
            <div class="shell">
                <div class="">
                <h3 class="text-center">Locating an Establishment to Review</h3>
                </div>
            </div>
            </section>

            <section class="section-66 section-sm-90 section-lg-bottom-120">
                <div class="shell">
                <div class="range range-lg-justify offset-top-30">
                    <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
                    <div class="cell-sm-10 cell-lg-10 text-secondary">
                        <div class="range range-lg-justify offset-top-5">
                            <h3>Use this form to report any serious problems encountered while conducting a review for Hayche. </h3>

                            {{--  <span class="alert alert-info" style="float:right;">
                                Continue to <a href="/dashboard">dashboard </a>
                            </span>  --}}
                            <span class="alert alert-info" style="float:right;">
                                Report <a href="{{ route('hayche-review-create') }}">incidents </a>
                            </span>
                            <form method="POST" enctype="multipart/form-data" action="{{ route('hayche-review-establishment-process') }}" data-form-output="form-output-global" data-form-type="contact" class="form-modern offset-top-10">
                                @csrf

                                @include('const.messages')

                                <div class="range">
                                    <div class="cell-sm-4">
                                        <input type="hidden" value="{{ auth()->user()->id }}"  name="user_id">
                                        <div class="form-group">
                                            <select class="form-control" required name="name">
                                                <option name="name[]" value=""> -- Select an Establishment -- </option>
                                                @if(count($companies) > 0 )
                                                    @foreach ($companies as $item)
                                                        <option name="name[]" value="{{ $item->companyname }}">{{ $item->companyname }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cell-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" required name="city">
                                                <option name="city[]" value="" > -- Select the City -- </option>
                                                @if(count($companies) > 0 )
                                                    @foreach ($companies as $item)
                                                        <option name="city[]" value="{{ $item->city }}">{{ $item->city }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cell-sm-4">
                                        <div class="form-group">
                                            <select class="form-control" required name="city">
                                                <option name="city[]" value=""> -- Select the Type of Establishment -- </option>
                                                @if(count($companies) > 0 )
                                                    @foreach ($companies as $item)
                                                        <option  name="city[]" value="{{ $item->facility_type }}">{{ $item->facility_type }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="cell-xs-12 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                            <textarea id="review" name="review" data-constraints="@Required" class="form-control"></textarea><br>
                                            <label for="review" class="form-label">Write your Review </label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="pdf" class="form-label">Upload Pdf</label> <br>
                                                <input type="file" name="pdf" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="pdf" class="form-label">Select Image 1  <span style="color:red;font-weight:bolder;">*</span></label> <br>
                                                <input type="file" name="image1" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="image Caption" class="form-label"> Image 1 Caption </label> <br>
                                                <input type="text" name="image1_caption" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="pdf" class="form-label">Select Image 2 </label> <br>
                                                <input type="file" name="image2" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="image Caption" class="form-label"> Image 2 Caption </label> <br>
                                                <input type="text" name="image2_caption" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                <div class="cell-xs-6 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="pdf" class="form-label">Select Image 3 </label> <br>
                                                <input type="file" name="image3" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-6 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                                <label for="image Caption" class="form-label"> Image 3 Caption </label> <br>
                                                <input type="text" name="image3_caption" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-8 offset-top-30 offset-xs-top-30 offset-sm-top-50">
                                    <button type="submit" class="btn btn-purple btn-block">Send</button>
                                    </div>
                                    <div class="cell-xs-4 offset-top-22 offset-xs-top-30 offset-sm-top-50">
                                    <button type="reset" class="btn btn-silver-outline btn-block">Reset</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
                </div>
            </section>
        </main>
    @include('const.landing.footer')
@endsection
