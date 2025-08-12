@extends('layouts.admin.base')

@section('content')
    <section class="users" id="users">
        <div class="titlebar">
            <h1>Users </h1>
            <button class="open-modal">New User</button>
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
                        <option value="">Filter User</option>
                    </select>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search User...">
                </div>
            </div>

            <div class="user_table-heading">
                <p>Photo</p>
                <p>Name</p>
                <p>Role</p>
                <p>Actions</p>
            </div>
            <!-- item 1 -->
            <div class="user_table-items">
                <p>
                    <img src="../assets/img/avatar.jpg" alt="" class="user_img-list">
                </p>
                <p>Backend Developer</p>
                <p>Backend Developer</p>
                <div>
                    <button class="btn success">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button class="btn danger" >
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>
@endsection
