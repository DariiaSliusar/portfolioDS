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
                    @includeIf('includes.flash_message')
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
                                    <form method="POST" action="{{ route('medias.destroy', $media->id) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="id" value="{{ $media->id }}">
                                        <button class="danger" type="submit" onclick="return confirm(&quot;Are you sure you want to delete this media?&quot;)">
                                            delete
                                        </button>
                                    </form>

                                </div>
                            @endforeach
                            <br>
                            @includeIf('admin.medias.form')
                        </div>
                    </div>


                </section>
            </div>
        </div>
    </section>
@endsection
