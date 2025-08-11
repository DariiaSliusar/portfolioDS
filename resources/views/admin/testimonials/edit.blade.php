@extends('layouts.admin.base')

@section('content')
    <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @includeIf('admin.testimonials.form', ['formMode' => 'edit'])
    </form>
@endsection
