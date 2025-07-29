<div class="d-flex justify-content-center mt-3">
    @if (!request()->is('roles'))
        <a href="{{ url('roles') }}" class="btn btn-primary mx-2">Perfiles</a>
    @endif

    @if (!request()->is('permissions'))
        <a href="{{ url('permissions') }}" class="btn btn-info mx-2">Permisos</a>
    @endif

    @if (!request()->is('users'))
        <a href="{{ url('users') }}" class="btn btn-warning mx-2">Usuarios</a>
    @endif
</div>
