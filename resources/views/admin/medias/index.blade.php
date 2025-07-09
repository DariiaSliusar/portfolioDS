@extends('layouts.admin.base')

@section('content')
    <section class="setting" id="setting">
        <div class="setting-wrapper">

            @includeIf('layouts.admin.nav')

            <div class="setting_content">
                <section class="about" id="about">
                    <div class="titlebar">
                        <h1>Medias</h1>
                    </div>
                    <div class="card-wrappere">
                        <div class="card">
                            <h2>Social media</h2>
                            <div class="social_table-heading">
                                <p>Link</p>
                                <p>Icon</p>
                                <p></p>
                            </div>
                            <!-- item 1 -->
                            @foreach($medias as $media)
                                <div class="social_table-items">
                                    <p>{{ $media->link }}</p>
                                    <button class="service_table-icon">
                                        <i class="{{ $media->icon }}"></i>
                                    </button>
                                    <button>
                                        delete
                                    </button>
                                </div>

                            @endforeach
                            <div class="social_table-items">
                                <p>https://www.facebook.com</p>
                                <button class="service_table-icon">
                                    <i class="uil uil-facebook-f"></i>
                                </button>
                                <button>
                                    delete
                                </button>
                            </div>

                            <br>

                            <div class="social_table-heading">
                                <p>Link</p>
                                <span style="color:#006fbb;">(Find your icon class: Font Awesome)</span>
                                <p></p>
                            </div>
                            <p></p>
                            <div class="social_table-items">

                                <input type="text" />

                                <input type="text" />
                                <button>
                                    Add Media
                                </button>
                            </div>

                        </div>
                    </div>


                </section>
            </div>
        </div>
    </section>
@endsection
