@extends('layouts.admin.base')
@section('content')
    <section class="skills" id="skills">
        <div class="titlebar">
            <h1>Skills </h1>
            <button class="open-modal">New Skill</button>
        </div>
        @includeIf('admin.skills.create')
        @includeIf('includes.flash_message')
        <div class="table">

            <div class="table-filter">
                <div>
                    <ul class="table-filter-list">
                        <li>
                            <p class="table-filter-link link-active">All</p>
                        </li>
                    </ul>
                </div>
            </div>
            <form method="DET" action="{{ route('admin.skills.index') }}">
                <div class="table-search">
                    <div>
                        <select class="search-select" name="" id="">
                            <option value="">Filter Skills</option>
                        </select>
                    </div>
                    <div class="relative">
                        <input class="search-input" type="text" name="search" placeholder="Search Skill..." value="{{ request('search') }}">
                    </div>
                </div>
            </form>

            <div class="skill_table-heading">
                <p>Name</p>
                <p>Proficiency</p>
                <p>Service</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
            @foreach($skills as $skill)
                <div class="skill_table-items">
                    <p>{{$skill->name}}</p>
                    <div class="table_skills-bar">
                        <span class="table_skills-percentage" style="width: {{ $skill->proficiency }}%;"></span>
                        <strong>{{ $skill->proficiency }}%</strong>
                    </div>
{{--                    <p>{{ $skill->service_id }}</p>--}}
                    @if ($skill->service)
                        <p>{{ $skill->service->title}}</p>
                    @else
                        <p></p>
                    @endif
                    <div>
                        <button class="btn-icon success open-modal">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <form method="POST" action="{{ route('admin.skills.destroy', $skill->id) }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn-icon danger" onClick="return confirm(&quot;Are you sure you want to delete this skill?&quot;);">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                    </div>
                </div>
            @includeIf('admin.skills.edit')
            @endforeach

            <div class="table-paginate">
                {{ $skills->links('includes.pagination') }}
            </div>
        </div>

    </section>
@endsection
