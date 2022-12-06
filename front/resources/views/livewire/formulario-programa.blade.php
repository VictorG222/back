<div class="card-body">

    @if (array_key_exists('message', $errores))
        <div class="alert alert-danger">
            <b>{{ $errores['message'] }}</b>
        </div>
    @endif

    <div class="form-group">
        <label>Nombre del programa</label>
        <input wire:model='datos.nombre' type="text" class="form-control" placeholder="Nombre del programa">
        @if (array_key_exists('errors', $errores) && array_key_exists('nombre', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['nombre']['0'] }}</b>
        @endif

    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <input wire:model='datos.descripcion' type="text" class="form-control" placeholder="Descripcion">
        @if (array_key_exists('errors', $errores) && array_key_exists('descripcion', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['descripcion']['0'] }}</b>
        @endif
    </div>
    <div class="form-group">
        <label>Clave</label>
        <input wire:model='datos.clave' type="text" class="form-control" placeholder="Clave">
        @if (array_key_exists('errors', $errores) && array_key_exists('clave', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['clave']['0'] }}</b>
        @endif
    </div>
    <div class="form-group">
        <label>Area</label>
        <input wire:model='datos.areas_id' type="text" class="form-control" placeholder="Area_id">
        @if (array_key_exists('errors', $errores) && array_key_exists('areas_id', $errores['errors']))
            <b class="text-danger">{{ $errores['errors']['areas_id']['0'] }}</b>
        @endif
    </div>
    <div class="form-group">
        <label>Estado Global del programa</label>
        <select wire:model='datos.estados_globales' class="form-control">
            <option>Activo</option>
            <option>Inactivo</option>
        </select>
        @if (array_key_exists('errors', $errores) && array_key_exists('estados_globales', $errores['errors']))
        <b class="text-danger">{{ $errores['errors']['estados_globales']['0'] }}</b>
    @endif
    </div>
</div>
