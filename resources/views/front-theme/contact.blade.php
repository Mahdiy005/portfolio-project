@extends('front-theme.master')
@section('page-title', 'Contact')
@section('contact-active', 'active')
@section('hero-type')
    <x-hero-section heroName="Contact Us"/>
@endsection

@section('content')
        <!-- Contact Start -->
        <div class="py-6 container-xxl">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Contact Us</div>
                    <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="mb-4 text-center">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <x-status state="success"></x-status>
                        <form method="POST" action="{{ route('front.contact.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                        <label for="name">{{ __('messages.name') }}</label>
                                    </div>
                                    <x-error-form name="name"></x-error-form>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">{{ __('messages.email') }}</label>
                                    </div>
                                    <x-error-form name="email"></x-error-form>

                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">{{ __('messages.subject') }}</label>
                                    <x-error-form name="subject"></x-error-form>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">{{ __('messages.message') }}</label>
                                    <x-error-form name="message"></x-error-form>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="py-3 btn btn-primary w-100" type="submit">{{ __('messages.save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection
