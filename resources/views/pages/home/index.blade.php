@extends('layouts.pages.base')

@section('content')
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home_container container grid">
            @foreach($abouts as $about)
                <div class="home_img">
                    @if ($about->home_image)
                        <img src="{{ asset('images/' . $about->home_image) }}" alt="">
                    @else
                        <img src="{{ asset('template/assets/img/home.png') }}" alt="">
                    @endif
                </div>

                <div class="home_data">
                    <h1 class="home_title" style="font-size: 2.5rem;">Hi, I'am {{ $about->name }}</h1>
                    <h3 class="home_subtitle">{{ $about->tagline }}</h3>
                    <p class="home_description">
                        {{ $about->summary }}
                    </p>
                    <a href="#contact" class="button button--flex">
                        Contact Me <i class="uil uil-message button__icon"></i>
                    </a>
                    <div class="home_scroll">
                        <a href="#about" class="home_scroll-button button--flex"></a>
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </div>
                    <div class="home_social">
                        <span class="home_social-follow">Follow Me</span>
                        <div class="home_social-links">
                            @foreach($mediasHome as $media)
                                <a href="{{ $media->link }}" target="_blank" class="home_social-icon">
                                    <i class="{{ $media->icon }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="home_scroll_social">
                        <div class="home_scroll1">
                            <a href="#about" class="home_scroll-button button--flex"></a>
                            <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                            <span class="home_scroll-name">Scroll down</span>
                            <i class="uil uil-arrow-down home_scroll-arrow"></i>
                        </div>
                        <div class="home_social1">
                            <div class="home_social-link">
                                @foreach($mediasHome as $media)
                                    <a href="{{ $media->link }}" target="_blank" class="home_social-icon">
                                        <i class="{{ $media->icon }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    @includeIf('includes.about')

    <!--==================== SKILLS ====================-->
    @includeIf('includes.skills')

    <!--==================== QUALIFICATION ====================-->
    @includeIf('includes.qualification')

    <!--==================== SERVICES ====================-->
    @includeIf('includes.services')

    <!--==================== PORTFOLIO ====================-->
    @includeIf('includes.portfolio')

    <!--==================== PROJECT IN MIND ====================-->
    @includeIf('includes.project-in-mind')

    <!--==================== TESTIMONIAL ====================-->
    @includeIf('includes.testimonial')

    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact_container container grid">
            @foreach($abouts as $about)
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Call Me</h3>
                            <span class="contact_subtitle">{{ $about->phone }}</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">{{ $about->email }}</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">{{ $about->address }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

            <form method="POST" action="{{ route('contact.store') }}" class="contact_form grid">
                @csrf
                <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label for="" class="contact_label">Name</label>
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" class="contact_input" name="name">
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Email</label>
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="email" class="contact_input" name="email">
                    </div>
                </div>
                <div class="contact_content">
                    <label for="" class="contact_label">Project</label>
                    @error('subject')
                        <p>{{ $message }}</p>
                    @enderror
                    <input type="text" class="contact_input" name="subject">
                </div>
                <div class="contact_content">
                    <label for="" class="contact_label">Project description</label>
                    @error('description')
                        <p>{{ $message }}</p>
                    @enderror
                    <textarea name="description" id="" cols="0" rows="7" class="contact_input"></textarea>
                </div>
                <div>
                    <button class="button button--flex">
                        Send Message
                        <i class="uil uil-message button_icon"></i>
                    </button>
                </div>
            </form>

            @includeIf('includes.flash_message')

        </div>
    </section>
@endsection
