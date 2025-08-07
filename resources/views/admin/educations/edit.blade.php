<form method="POST" action="{{ route('admin.educations.update', $education->id) }}">
    @csrf
    @method('PATCH')
    @includeIf('admin.educations.form', ['formMode' => 'edit'])
</form>
