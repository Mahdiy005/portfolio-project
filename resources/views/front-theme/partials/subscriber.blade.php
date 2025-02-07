<div class="my-6 container-xxl bg-primary wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6">
                <h3 class="text-white">Ready to get started</h3>
                <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                <div class="mt-3 position-relative w-100">
                    <form action="{{ route('front.subscriber.store') }}" method="POST">
                        @csrf
                        <input class="border-0 form-control rounded-pill w-100 ps-4 pe-5" name="email" type="text"
                        placeholder="Enter Your Email" style="height: 48px;">
                    <button type="submit" class="top-0 mt-1 shadow-none btn position-absolute end-0 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </form>
                </div>
            </div>
            <div class="text-center col-md-6 mb-n5 d-none d-md-block">
                <img class="mt-5 img-fluid" style="max-height: 250px;"
                    src="{{ asset('front_assets') }}/img/newsletter.png">
            </div>
        </div>
    </div>
</div>
