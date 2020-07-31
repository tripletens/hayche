@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
        <main class="page-content">
            <section style="background-image: url('{{ asset('landing/images/about_home_hayche.jpg') }}');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
            <div class="shell">
                <div class="">
                <h3 class="text-center">Hayche Reviewer Incident Report Form</h3>
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

                            {{--  <span class="alert alert-info" style="float:left;">
                                Continue to <a href="/dashboard">dashboard </a>
                            </span>  --}}
                            <span class="alert alert-info" style="float:right;">
                                Review Establishments <a href="{{ route('hayche-review-establishment') }}">here </a>
                            </span>
                            <form method="POST" action="{{ route('hayche-review-create-process') }}" data-form-output="form-output-global" data-form-type="contact" class="form-modern offset-top-15">
                                @csrf
                                @include('const.messages')
                                <div class="range">
                                    <div class="cell-sm-12">
                                        <input type="hidden" value="{{ auth()->user()->id }}"  name="user_id">
                                    <div class="form-group">
                                        <input id="nickname" type="text" name="nickname" data-constraints="@Required" class="form-control">
                                        <label for="nickname" class="form-label">Nickname</label>
                                    </div>
                                    </div>
                                    <div class="cell-sm-6 offset-top-30 offset-sm-top-0">
                                    <div class="form-group">
                                       <span class="form-label">Incident Type :</span><br>
                                        <input type="radio" name="incident_type" value="food poisoning"> Food Poisoning
                                        <input type="radio" name="incident_type" value="physical violence"> Physical Violence
                                        <input type="radio" name="incident_type" value="security breach"> Security Breach
                                        <input type="radio" name="incident_type" value="others"> Others
                                    </div>
                                    </div>
                                    <div class="cell-xs-12 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                            <textarea id="incident_others" name="incident_others" data-constraints="@Required" class="form-control"></textarea><br>
                                            <label for="incident_others" class="form-label">Please Describe the incident </label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-sm-12 offset-top-10 offset-sm-top-0">
                                        <div class="form-group">
                                        <span class="form-label">if this was a case of physical violence, was it reported to local law enforcement?</span><br><br>
                                            <input type="radio" name="physical_violence" value="yes"> Yes
                                            <input type="radio" name="physical_violence" value="no"> No
                                        </div>
                                    </div>
                                    <div class="cell-sm-12 offset-top-10 offset-sm-top-0">
                                        <div class="form-group">
                                        <span class="form-label">if this was a case of food poisoning, was the restaurant notified?</span><br>
                                            <input type="radio" name="food_poisoning_restaurant" value="yes"> Yes
                                            <input type="radio" name="food_poisoning_restaurant" value="no"> No
                                        </div>
                                    </div>
                                    <div class="cell-sm-12 offset-top-10 offset-sm-top-0">
                                        <div class="form-group">
                                        <span class="form-label">if this was a case of food poisoning, was a consumer protection, or sanitation agency notified?</span><br><br>
                                            <input type="radio" name="food_poisoning_agency" value="yes"> Yes
                                            <input type="radio" name="food_poisoning_agency" value="no"> No
                                        </div>
                                    </div>
                                    <div class="cell-xs-12 offset-top-30">
                                        <div class="form-group">
                                            <div class="textarea-lined-wrap">
                                            <textarea id="incident_others" name="incident_others" data-constraints="@Required" class="form-control"></textarea>
                                            <label for="incident_others" class="form-label">Any other action taken regarding this incident?</label>
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
