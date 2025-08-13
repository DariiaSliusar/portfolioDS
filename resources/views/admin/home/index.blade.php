@extends('layouts.admin.base')

@section('content')
    <section class="overview" id="overview">
        <div class="overview_left">
            <div class="titlebar">
                <h1 style="padding-left: 10px;">Overview Dashboard</h1>
            </div>
            <!-- TOP CARDS -->
            <div class="overview_cards ">
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Skills</p>
                        @if ($skillCount > 0)
                            <span>{{ $skillCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/skills') }}">View Skills</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Educations</p>
                        @if ($educationCount > 0)
                            <span>{{ $educationCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/educations') }}">View Educations</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Experience</p>
                        @if ($experienceCount > 0)
                            <span>{{ $experienceCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/experiences') }}">View Experiences</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Services</p>
                        @if ($servicesCount > 0)
                            <span>{{ $servicesCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/services') }}">View Services</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Projects</p>
                        @if ($projectsCount > 0)
                            <span>{{ $projectsCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/projects') }}">View Projects</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Testimonials</p>
                        @if ($testimonialsCount > 0)
                            <span>{{ $testimonialsCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/testimonials') }}">View Testimonials</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Messages</p>
                        @if ($messageCount > 0)
                            <span>{{ $messageCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/messages') }}">View Messages</a>
                    </div>
                </div>
                <div class="overview_cards-item card">
                    <div class="overview_data">
                        <p>Users</p>
                        @if ($messageCount > 0)
                            <span>{{ $messageCount }}</span>
                        @else
                            <span>0</span>
                        @endif
                    </div>
                    <div class="overview_link">
                        <span></span>
                        <a href="{{ url('admin/users') }}">View Users</a>
                    </div>
                </div>


            </div>
            <!-- MEDIUM CARDS -->
            <div class="overview_table ">
                <div>
                    <div class="titlebar">
                        <h1>Latest Projects</h1>
                    </div>
                    <div class="table ui-card">
                        <div class="overview_table-header">
                            <p>Image</p>
                            <p>Project</p>
                        </div>
                        @foreach ($projects as $project)
                            <div class="overview_table-items">
                                <img src="{{ asset('images/' . $project->image) }}" />
                                <a>{{ $project->title }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="titlebar">
                        <h1>Latest Testimonials</h1>
                    </div>
                    <div class="table">
                        <div class="overview_table-header">
                            <p>Image</p>
                            <p>Testimonial</p>
                        </div>
                        @foreach($testimonials as $testimonial)
                            <div class="overview_table-items" >
                                <img src="{{ asset('images/' . $testimonial->image) }}" />
                                <a>{{ $testimonial->name }}</a>
                                <p>{{ Str::limit($testimonial->testimony, 40) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="overview_right">
            <div class="overview_analyse ui-card">
                <canvas id="myChart"></canvas>
            </div>
            <div class="titlebar">
                <h1>Skills</h1>
            </div>
            <div class="overview_skills">
                @foreach($services as $service)
                    <div class="overview_skills-title">
                        <h2>{{ $service->title }}</h2>
                    </div>
                    @foreach($service->skills as $skill)
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">{{ $skill->name }}</h3>
                                    <span class="skills_number">{{ $skill->proficiency }}%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage" style="width: {{$skill->proficiency}}%"></span>
                                </div>
                            </div>
                    @endforeach
                    <br><br>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        function dynamicColors() {
           var r = Math.floor(Math.random() * 255);
           var g = Math.floor(Math.random() * 255);
           var b = Math.floor(Math.random() * 255);
           return 'rgb(' + r + ',' + g + ',' + b + ', 0.5)';
        }

        function poolColors(a) {
            var pool = [];
            for(i=0; i < a; i++) {
                for(i=0; i < a; i++) {
                    pool.push(dynamicColors());
                }
                return pool;
            }
        }

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    @foreach($skills as $skill)
                        '{{ $skill->name }}',
                    @endforeach
                ],
                datasets: [{
                    label: '# of Skills(%)',
                    backgroundColor: poolColors({{ $skillCount }}),
                    borderColor: poolColors({{ $skillCount }}),
                    data: [
                        @foreach($skills as $skill)
                            {{ $skill->proficiency }},
                        @endforeach
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection

