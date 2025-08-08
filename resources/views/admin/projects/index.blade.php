@extends('layouts.admin.base')

@section('content')
    <section class="projects" id="projects">
        <div class="titlebar">
            <h1>Projects </h1>
            <a href="{{ route('admin.projects.create') }}">
                <button>New Project</button>
            </a>
        </div>
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
            <div class="table-search">
                <div>
                    <select class="search-select" name="" id="">
                        <option value="">Filter Project</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search Project...">
                </div>
            </div>

            <div class="project_table-heading">
                <p>Image</p>
                <p>Title</p>
                <p>Description</p>
                <p>Link</p>
                <p>Actions</p>
            </div>
            @foreach($projects as $project)
                <div class="project_table-items">
                    <p>
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="" class="project_img-list">
                        @else
                            <img src="{{ asset('template/assets/img/no-image.png') }}" alt="" class="project_img-list">
                        @endif
                    </p>
                    <p>{{ $project->title }}</p>
                    <p>{{ $project->description }}</p>
                    <p>{{ $project->link }}</p>
                    <div>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" style="text-decoration: none">
                            <button class="btn success">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" id="{{ $project->id }}" style="display: inline">
                            @csrf
                            @method('DELETE')
                        <button class="btn danger" onClick="return confirm(&quot;'Are you sure you want to delete this project?'&quot;);">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <div class="table-paginate">
                <div class="pagination">
                    <a href="#" class="btn">&laquo;</a>
                    <a href="#" class="btn active">1</a>
                    <a href="#" class="btn">2</a>
                    <a href="#" class="btn">3</a>
                    <a href="#" class="btn">&raquo;</a>
                </div>
            </div>
        </div>
    </section>
@endsection
