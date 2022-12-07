<div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">MODIFICAR PROGRAMA</h3>
        </div>

        <form wire:submit.prevent='modificar'>
            <div class="card-body">
                @include('livewire.formulario-programa')

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Modificar</button>
                </div>
        </form>
    </div>
</div>
