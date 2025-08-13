<form method="POST" action="{{ route('admin.users.update', $user->id) }}" >
    @csrf
    @method('PATCH')
    @includeIf('admin.users.form', ['formMode' => 'edit'])
</form>

