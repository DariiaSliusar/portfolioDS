@extends('layouts.admin.base')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @includeIf('admin.projects.form', ['formMode' => 'create'])
    </form>
@endsection
