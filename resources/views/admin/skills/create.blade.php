<form method="POST" action="{{ route('admin.skills.store') }}">
    @csrf
    @includeIf('admin.skills.form', ['formMode' => 'create'])
</form>
