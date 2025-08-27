<section class="testimonial section">
    <h2 class="section__title">Testimonial</h2>
    <span class="section__subtitle">My client saying</span>

    <div class="testimonial_container container swiper-container">
        <div class="swiper-wrapper">
            @foreach($testimonials as $testimonial)
                <div class="testimonial_content swiper-slide">
                    <div class="testimonial_data">
                        <div class="testimonial_header">
                            @if($testimonial->image)
                                <img src="{{ asset('images/' . $testimonial->image) }}" alt="" class="testimonial_img">
                            @else
                                <img src="{{ asset('template/assets/img/testimonial1.jpeg') }}" alt="" class="testimonial_img">
                            @endif
                            <div>
                                <h3 class="testimonial_name">{{ $testimonial->name }}</h3>
                                <span class="testimonial_client">{{ $testimonial->function }}</span>
                            </div>
                        </div>

                        <div>
                            {!! str_repeat('<i class="uil uil-star testimonial_icon-star"></i>', (int) $testimonial->rating) !!}
                        </div>
                    </div>
                    <p class="testimonial_description">
                        {{ $testimonial->testimony }}
                    </p>
                </div>
            @endforeach
        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination swiper-pagination-testimonial"></div>
    </div>
</section>
