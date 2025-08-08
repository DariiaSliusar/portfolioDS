@extends('layouts.admin.base')

@section('content')
    <section class="testimonials" id="projects">
        <div class="titlebar">
            <h1>Testimonials </h1>
            <button class="btn__open--modal">New Testimonial</button>
        </div>
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

            <div class="testimonial_table-heading">
                <p>Photo</p>
                <p>name</p>
                <p>Function</p>
                <p>Testimony</p>
                <p>Rating</p>
                <p>Actions</p>
            </div>
           @foreach($testimonials as $testimonial)
                <div class="testimonial_table-items">
                    <p>
                        @if($testimonial->image)
                            <img src="{{ asset('images/'.$testimonial->image) }}" alt="" class="testimonial_img-list">
                        @else
                            <img src="{{ asset('../../template/assets/img/avatar.jpg') }}" alt="" class="testimonial_img-list">
                        @endif
                    </p>
                    <p>{{ $testimonial->name }}</p>
                    <p>{{ $testimonial->function }}</p>
                    <p>{{ $testimonial->testimony }}</p>
                    <p>{{ $testimonial->rating }}</p>
                    <div>
                        <button class="btn-icon success">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn-icon danger" >
                            <i class="far fa-trash-alt"></i>
                        </button>
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
