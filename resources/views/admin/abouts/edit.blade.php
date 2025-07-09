@extends('layouts.admin.base')

@section('content')
    <section class="setting" id="setting">
        <div class="setting-wrapper">
            @includeIf('layouts.admin.nav')
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
    </section>
@endsection
