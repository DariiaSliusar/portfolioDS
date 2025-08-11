@extends('layouts.admin.base')

@section('content')
    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @includeIf('admin.testimonials.form', ['formMode' => 'create'])
    </form>
@endsection
