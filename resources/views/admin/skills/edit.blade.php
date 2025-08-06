<form method="POST" action="{{ route('admin.skills.update', $skill->id) }}">
    @csrf
    @method('PATCH')
    @includeIf('admin.skills.form', ['formMode' => 'edit'])
</form>
