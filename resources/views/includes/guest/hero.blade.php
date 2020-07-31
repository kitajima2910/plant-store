<section class="hero-area">
    <div class="hero-post-slides owl-carousel">
        @foreach ($sliders as $slider)
        <!-- Single Hero Post -->
        <div class="single-hero-post bg-overlay">
            <!-- Post Image -->
            <div class="slide-img bg-img" style="background-image: url({{ asset($slider->feature_image_path) }});"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            {{!! $slider->content !!}}
                            <div class="welcome-btn-group">
                                <a href="{{$slider->link . '.html'}}" class="btn alazea-btn mr-30">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        @endforeach
    </div>
</section>
