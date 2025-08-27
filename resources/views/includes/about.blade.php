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
