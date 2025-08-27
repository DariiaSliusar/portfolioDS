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
