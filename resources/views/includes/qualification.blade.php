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
