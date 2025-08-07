@extends('layouts.admin.base')

@section('content')
    <section class="experiences" id="experiences">
        <div class="titlebar">
            <h1>Experiences </h1>
            <button class="open-modal">New Experience</button>
        </div>
        @includeIf('admin.experiences.create')
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
                        <option value="">Filter Experience</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search Experience...">
                </div>
            </div>
            <div class="experience_table-heading">
                <p>Company</p>
                <p>Period</p>
                <p>Position</p>
                <p>Actions</p>
            </div>
            @foreach($experiences as $experience)
                <div class="experience_table-items">
                    <p>{{ $experience->company }}</p>
                    <p>{{ $experience->period }}</p>
                    <p>{{ $experience->position }}</p>
                    <div>
                        <button class="btn-icon success open-modal">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <form method="POST" action="{{ route('admin.experiences.destroy', $experience->id) }}" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn-icon danger" onClick="return confirm(&quot;Are you sure you want to delete this experience?&quot;);">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @includeIf('admin.experiences.edit')
            @endforeach
        </div>
    </section>
@endsection
