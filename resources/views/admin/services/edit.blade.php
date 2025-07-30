<form method="POST" action="{{ route('admin.services.update', $service->id) }}">
    @csrf
    @method('PATCH')
    @includeIf('admin.services.form', ['formMode' => 'edit'])
</form>
