<form method="POST" action="{{ route('admin.educations.store') }}">
    @csrf
    @includeIf('admin.educations.form', ['formMode' => 'create'])
</form>
