<div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">MODIFICAR PROGRAMA</h3>
        </div>

        <form wire:submit.prevent='modificar'>
            <div class="card-body">


                <form wire:submit.prevent='guardar'>

                    <div class="card-body">

                        @if (array_key_exists('message', $errores))
                            <div class="alert alert-danger">
                                <b>{{ $errores['message'] }}</b>
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Nombre del estado global</label>
                            <input wire:model='datos.descripcion' type="text" class="form-control" placeholder="Nombre del estado global">
                            @if (array_key_exists('errors', $errores) && array_key_exists('descripcion', $errores['errors']))
                                <b class="text-danger">{{ $errores['errors']['descripcion']['0'] }}</b>
                            @endif
                    </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Modificar</button>
                </div>
        </form>
    </div>
</div>
