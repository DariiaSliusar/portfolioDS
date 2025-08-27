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
