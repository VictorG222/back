<div>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">CREAR UN PROYECTO</h3>
        </div>

        <form wire:submit.prevent='guardar'>

            @include('livewire.formulario-proyecto')


            <div class="card-footer">
                <button type="submit" class="btn btn-success">CREAR</button>
            </div>
        </form>
    </div>
</div>
