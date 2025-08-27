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
    <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">My introduction</span>

        <div class="about_container container grid">
            @foreach($abouts as $about)
                @if($about->banner_image)
                    <img src="{{ asset('images/' . $about->banner_image) }}" alt="" class="about_img">
                @else
                    <img src="{{ asset('template/assets/img/about-img.png') }}" alt="" class="about_img">
                @endif
            @endforeach

            <div class="about_data">
                <p class="about_description">
                    FullStack Web developer, with extencive knowledge and years of experience,
                    working in web technologies and UI/UX design, delivering quality work
                </p>
                <div class="about_info">
                    <div>
                        <span class="about_info-title">08+</span>
                        <span class="about_info-name">Years <br>experience</span>
                    </div>
                    <div>
                        <span class="about_info-title">{{ $projectsCount }}+</span>
                        <span class="about_info-name">Completed <br>project</span>
                    </div>
                    <div>
                        <span class="about_info-title">{{  $experiencesCount }}+</span>
                        <span class="about_info-name">Companies <br>worked</span>
                    </div>
                </div>
                <div class="about_buttons">
                    @foreach($abouts as $about)
                        @if ($about->cv)
                            <a href="{{ asset('pdf/' . $about->cv) }}" class="button button--flex" download>
                                Download CV <i class="uil uil-download-alt button_icon"></i>
                            </a>
                        @else
                            <a href="{{ asset('template/assets/pdf/johndoe-Cv.pdf') }}" class="button button--flex">
                                Download CV <i class="uil uil-download-alt button_icon"></i>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical lever</span>

        <div class="skills_container container grid">
            @foreach($services as $service)
                <div>
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_title">{{ $service->title }}</h1>
                                <span class="skills_subtitle">More than 4 years</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            @foreach($service->skills as $skill)
                                <div class="skills_data">
                                    <div class="skills_titles">
                                        <h3 class="skills_name">{{ $skill->name }}</h3>
                                        <span class="skills_number">{{ $skill->proficiency }}%</span>
                                    </div>
                                    <div class="skills_bar">
                                        <span class="skills_percentage" style="width:{{ $skill->proficiency }}"></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My personal journel</span>

        <div class="qualification_container container">
            <div class="qualification_tabs">
                <div class="qualificaction_button button--flex qualification_active" data-target="#education">
                    <i class="uil uil-graduation-cap qualification_icon"></i>
                    Education
                </div>
                <div class="qualificaction_button button--flex" data-target="#work">
                    <i class="uil uil-briefcase-alt qualification-icon"></i>
                    Work
                </div>
            </div>

            <div class="qualification_sections">
                <!--========== QUALIFICATION CONTENT 1 ==========-->
                <div class="qualification_content qualification_active" data-content id="education">
                    @foreach($educations as $education)
                        @if($loop->iteration % 2)
                            <div class="qualification_data">
                                <div>
                                    <h3 class="qualification_title">{{ $education->department }}</h3>
                                    <span class="qualification_subtitle">{{ $education->institution }}</span>
                                    <div class="qualificaation_calender">
                                        <i class="uil uil-calender-alt"></i>
                                        {{ $education->period }}
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification_rounder"></span>
                                    <span class="qualification_line"></span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!--========== QUALIFICATION CONTENT 2 ==========-->
                <div class="qualification_content" data-content id="work">
                    @foreach($experiences as $experience)
                        @if($loop->iteration % 2)
                            <div class="qualification_data">
                                <div>
                                    <h3 class="qualification_title">{{ $experience->position }}</h3>
                                    <span class="qualification_subtitle">{{ $experience->company }}</span>
                                    <div class="qualificaation_calender">
                                        <i class="uil uil-calender-alt"></i>
                                        {{ $experience->position }}
                                    </div>
                                </div>
                                <div>
                                    <span class="qualification_rounder"></span>
                                    <span class="qualification_line"></span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        <h2 class="section__title">Services</h2>
        <span class="section__subtitle">What is offer</span>

        <div class="services_container container grid">
            @foreach($services as $service)
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">{{ $service->title }}</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal ">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">{{ $service->title }}</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>{{ $service->description }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>
        <span class="section__subtitle">Most recent work</span>

        <div class="portfolio_container container swiper-container">
            <div class="swiper-wrapper">
                @foreach($projects as $project)
                    <div class="portfolio_content grid swiper-slide">
                        @if($project->image)
                            <img src="{{ asset('images/' . $project->image) }}" alt="" class="portfolio_img">
                        @else
                        <img src="{{ asset('template/assets/img/portfolio1.jpeg') }}" alt="" class="portfolio_img">
                        @endif

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">{{ $project->title }}</h3>
                            <p class="portfolio_description">
                               {{ $project->description }}
                            </p>
                            <a href="{{ $project->link }}" class="button button--flex button--small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!--Add Arrow-->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>
            <!--Add Pagination-->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">
        <div class="project_bg">
            <div class="project_container container grid">
                <div class="project_data">
                    <h2 class="project_title">You have new project</h2>
                    <p class="project_description">Contact me now and get a 50% discounted</p>
                    <a href="#contact" class="button button--flex button--white">
                        Contact Me
                        <i class="uil uil-message project_icon button_icon"></i>
                    </a>
                </div>
                @foreach($abouts as $about)
                    @if ($about->home_image)
                        <img src="{{ asset('images/' . $about->home_image) }}" alt="" class="project_img">
                    @else
                        <img src="{{ asset('template/assets/img/home.png') }}" alt="" class="project_img">
                    @endif
                @endforeach

            </div>
        </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
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

    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact_container container grid">
            <div>
                <div class="contact_information">
                    <i class="uil uil-phone contact_icon"></i>

                    <div>
                        <h3 class="contact_title">Call Me</h3>
                        <span class="contact_subtitle">444-444-444</span>
                    </div>
                </div>
                <div class="contact_information">
                    <i class="uil uil-envelope contact_icon"></i>

                    <div>
                        <h3 class="contact_title">Email</h3>
                        <span class="contact_subtitle">johndoe@gmail.com</span>
                    </div>
                </div>
                <div class="contact_information">
                    <i class="uil uil-map-marker contact_icon"></i>

                    <div>
                        <h3 class="contact_title">Location</h3>
                        <span class="contact_subtitle">Germany-Munich Av.munich #1234</span>
                    </div>
                </div>
            </div>

            <form action="" class="contact_form grid">
                <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label for="" class="contact_label">Name</label>
                        <input type="text" class="contact_input">
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Email</label>
                        <input type="email" class="contact_input">
                    </div>
                </div>
                <div class="contact_content">
                    <label for="" class="contact_label">Project</label>
                    <input type="tetx" class="contact_input">
                </div>
                <div class="contact_content">
                    <label for="" class="contact_label">Project description</label>
                    <textarea name="" id="" cols="0" rows="7" class="contact_input"></textarea>
                </div>
                <div>
                    <a href="#" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button_icon"></i>
                    </a>
                </div>
            </form>
        </div>
    </section>
@endsection
