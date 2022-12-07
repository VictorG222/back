<div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">MODIFICAR AREA</h3>
        </div>

        <form wire:submit.prevent='modificar'>
            <div class="card-body">


                <div class="card-body">

                    @if (array_key_exists('message', $errores))
                    <div class="alert alert-danger">
                        <b>{{ $errores['message'] }}</b>
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Descripcion</label>
                        <input wire:model='datos.descripcion' type="text" class="form-control" placeholder="Descripcion del area">
                        @if (array_key_exists('errors', $errores) && array_key_exists('descripcion', $errores['errors']))
                            <b class="text-danger">{{ $errores['errors']['descripcion']['0'] }}</b>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Disponible</label>
                        <input wire:model='datos.disponible' type="checkbox"  class="form-control" placeholder="Idica si esta disponible">
                        @if (array_key_exists('errors', $errores) && array_key_exists('disponible', $errores['errors']))
                            <b class="text-danger">{{ $errores['errors']['disponible']['0'] }}</b>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Estado global</label>
                        <input wire:model='datos.estados_globales' type="text" class="form-control" placeholder="Estado global">
                        @if (array_key_exists('errors', $errores) && array_key_exists('estados_globales', $errores['errors']))
                            <b class="text-danger">{{ $errores['errors']['estados_globales']['0'] }}</b>
                        @endif
                    </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Modificar</button>
                </div>
        </form>
    </div>
</div>
