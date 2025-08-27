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
