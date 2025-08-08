@extends('layouts.admin.base')

@section('content')
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @includeIf('admin.projects.form', ['formMode' => 'edit'])
    </form>
@endsection
