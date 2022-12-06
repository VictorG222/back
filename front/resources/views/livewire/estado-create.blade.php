<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">CREAR ESTADO</h3>
    </div>


    <form wire:submit.prevent='guardarEstado'>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">DESCRIPCION</label>
                <input wire:model='datos.descripcion' class="form-control" placeholder="Estado global">


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
