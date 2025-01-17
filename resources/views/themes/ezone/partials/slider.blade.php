@if ($slides)
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            @foreach ($slides as $slide)
            <div class="single-slider-4 slider-height-6 bg-img" style="background-image: url({{ asset('storage/'. $slide->extra_large) }})">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto col-lg-6">
                            <div class="furniture-content fadeinup-animated">
                                <h2 class="animated">{!! $slide->title !!}</h2>
                                <p class="animated">{{ $slide->body }}</p>
                                <a class="furniture-slider-btn btn-hover animated" href="{{ $slide->url }}">Go</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="single-slider-4 slider-height-6 bg-img" style="background-image: url({{ asset('themes/ezone/assets/img/slider/9.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto col-lg-6">
                            <div class="furniture-content fadeinup-animated">
                                <h2 class="animated">Comfort  <br>Collection.</h2>
                                <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="furniture-slider-btn btn-hover animated" href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-4 slider-height-6 bg-img" style="background-image: url({{ asset('themes/ezone/assets/img/slider/19.jpg') }})">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto col-lg-6">
                            <div class="furniture-content fadeinup-animated">
                                <h2 class="animated">Comfort  <br>Collection.</h2>
                                <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="furniture-slider-btn btn-hover animated" href="product-details.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endif