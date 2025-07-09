@extends('layouts.admin.base')

@section('content')
    <section class="setting" id="setting">
        <div class="setting-wrapper">
            <div class="setting_nav">
                <div class="setting-titlebar">
                    <img src="../../template/assets/img/avatar.jpg" alt="" class="setting-avatar">
                    <p>Natalia Brakux</p>
                </div>
                <nav class="nav">
                    <div class="nav-setting-wrapper">
                        <div class="nav-list">
                            <ul class="nav-list-item-setting">
                                <li>
                                    <a href="#" class="nav-active">
                                        <span><i class="fas fa-cog"></i></span>
                                        <span>About Me</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-list-item-setting">
                                <li>
                                    <a href="#" >
                                        <span><i class="fas fa-cog"></i></span>
                                        <span>My social Media</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="setting_content">
                <section class="about" id="about">
                    <form method="POST" action="{{ route('abouts.update', $about->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        @includeIf('admin.abouts.form', ['formMode' => 'edit'])
                    </form>
                </section>
            </div>
        </div>
        <section>
        </section>
    </section>
@endsection
