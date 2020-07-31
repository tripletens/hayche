@extends('layouts.landing')

@section('content')
    @include('const.landing.top-nav')
        <main class="page-content">
            <section style="background-image: url('landing/images/about_home_hayche.jpg');" class="section-30 section-sm-40 section-md-66 section-lg-bottom-90 bg-gray-dark page-title-wrap">
            <div class="shell">
                <div class="">
                <h3 class="text-center">Hayche Review</h3>
                </div>
            </div>
            </section>
            <section class="section-66 section-sm-90 section-lg-bottom-120">
                <div class="shell">
                <div class="range range-lg-justify offset-top-30">
                    <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
                    <div class="cell-sm-10 cell-lg-10 text-secondary">
                        <div class="range range-lg-justify offset-top-30">
                            <h3>Getting started with your first review</h3>
                            <p>
                                    To become an Hayche Elite reviewer, you'll first need to create an account and login.
                                    @auth
                                        Visit <a href="{{ route('hayche-review-create') }}">https://hayche.net/hayche-reviews/create</a>
                                    @else
                                         Visit <a href="{{ route('hayche-review-create') }}">https://hayche.net/hayche-reviews/create</a>
                                    @endauth
                            </p> <br><br>
                            <div>
                                    <h4>
                                        What kind of places can I review?
                                    </h4>
                                        <p>While Hayche reviews are focused on the hospitality sector, we are equally interested in other categories of business – almost anything you have a local experience or interaction with (although there are guidelines and restrictions). And if there is a business category that is not covered, you can add it to our directory.</p>
                            </div> <br> <br>
                            <div>
                                    <h4>
                                        Locating an establishment to review
                                    </h4>
                                    <p>While Hayche reviews are focused on the hospitality sector, we are equally interested in other categories of business – almost anything you have a local experience or interaction with (although there are guidelOnce you’ve created a reviewer account, log in with your Username and Password. Locate the establishment you wish to review by using the search bar located at the top of the page on the website or from the search button on the app. Enter the name of the establishment you are looking for in the first field, the location in the second field, and the category in the third field. There are also search filters you can use to narrow the results.
                                            Once you've located the establishment, it's simple: click or tap Write a Review to continue with the review process.
                                            If you're unable to locate the establishment, you may need to add it.ines and restrictions). And if there is a business category that is not covered, you can add it to our directory.</p>
                            </div>
                            <div>
                                    <h4>
                                        What should I include in my review?
                                    </h4>
                                    <p>
                                        The best reviews are passionate and personal. They offer a rich narrative, a wealth of detail, and a helpful tip or two for other consumers. <br>
                                        Think about your recent experience at an establishment - could you put details in there that would help future consumers like you? <br>
                                        i.) Try detailing your favorite (or least favorite) dishes at your local restaurant. <br>
                                        ii.) Talk about an experience that will keep you coming back (or staying away) for years to come. iii.) Highlight an employee who went the extra mile to make your experience memorable. <br>
                                        iv.) Include tips about the best time to arrive, where to park, or where the best seating is. <br>
                                        v.) Describe why you’ll be using this service (plumber, caterer, contractor, etc.) again for your next project.

                                    </p>
                            </div>
                            <div>
                                <h4>
                                    What should I leave out of my review?
                                </h4>
                                <p>
                                    You should aim to keep your review accurate and reflective of a genuine, personal experience. For example, personal opinions (“the food here is the best”) are good, but speculation or exaggeration (“they probably use unicorn meat in their tacos”) is something we frown upon.
                                </p>
                            </div>
                            <div>
                                <h4>
                                    Awarding medals
                                </h4>
                                <p>
                                    As part of the review process, you will award medals to each establishment that you review; this provides a quick visual indication of the performance of an establishment. The medal system is simple
                                </p> <br>
                                <img src="{{ asset('landing/images/medal-a.jpg') }}" alt=""> Exceptional (Loved it, will certainly recommend and patronize again, and again) <br>
                                <img src="{{ asset('landing/images/medal-b.jpg') }}" alt=""> Very Good (Liked it, will recommend) <br>
                                <img src="{{ asset('landing/images/medal-c.jpg') }}" alt=""> Good (Willing to give it another chance) <br>
                                <img src="{{ asset('landing/images/medal-d.jpg') }}" alt=""> Just Ok (Could be better) <br>
                                <img src="{{ asset('landing/images/medal-e.jpg') }}" alt=""> Bad (Not in a hurry to patronize again) <br>
                                <p>To award medal(s), or “No medal”, click the number that represents the number of medals you wish to award to an establishment, click “0” to award “No Medal”</p>
                            </div>
                            <div>
                                <h4>
                                    Writing a review
                                </h4>
                                <p>
                                    Your review should be a maximum of 200 words. Mention the name of the establishment,
                                    the location and the unique thing about it. Highlight a “Five Medal” experience that
                                    will keep you coming back, or a “No Medal” experience that will keep you away for years to come.
                                    Include tips about the best time to arrive, where to park, or whether indoor or outdoor seating provides
                                    the best experience. Talk about the customer service, mention an employee who went the extra mile to make
                                    your experience memorable. <span style="color: red;">Hayche reviews does not accept, and will not publish inappropriate content: </span>
                                    Avoid the use of threats, harassment, lewdness, hate speech, and other displays of bigotry in your reviews.
                                </p>
                            </div>
                            <div>
                            <h4>
                                Taking Photographs
                            </h4>
                            <p>
                                There is truth in the saying that “a picture is worth a thousand words” Your reviews should ideally be accompanied
                                by at least one clear photograph. In order to take good quality photographs using your smart phone, follow these simple tips;
                                i.) Clean the lens of your phone’s camera by gently wiping with a clean dry cloth to avoid taking blurry photos. ii.)
                                Use the Landscape Orientation; turn your phone sideways to get the landscape orientation iii.) Use the highest resolution
                                iv.) For greater detail, get closer instead of zooming in v.) Pay attention to lighting, make sure the primary source of light,
                                be it the sun or a light bulb, is behind you, shining on the subject of the photo. vi.) Avoid using the flash if lighting conditions are adequate. vii.) To avoid blurry unfocused images, ensure your hands are steady before taking a photograph.
                            </p> <br>
                            <img src="{{ asset('images/pancakes-a.jpg') }}" alt="" style="color: #000;">
                        </div> <br>
                        <div>
                            <h4>
                                Ask for the Manager
                            </h4>
                            <p>
                                We encourage you to always ask to meet the manager at the establishment you are reviewing. If the manager
                                is available, introduce yourself, and explain the purpose of the review. Be sure to collect the manager’s
                                name and contact information, and encourage her/him to visit the Hayche web site and sign up to the Hayche Network
                            </p>
                            <a href="Review_La-Pyramide.pdf">See example of an Hayche review</a> <br> <br>
                            <a href="review-policy.html"><h5>Terms and conditions >></h5></a>

                        </div>
                    </div>
                </div>
                <div class="cell-sm-1 cell-lg-1 text-secondary"></div>
                </div>
            </section>
        </main>
    @include('const.landing.footer')
@endsection
