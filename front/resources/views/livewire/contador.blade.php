<div>


    <input wire:model='nombre' class="form-control" type="text">
    <h1>Hola {{$nombre}}</h1>
    <h1>Numero Actual {{$numero}}</h1>


    <button wire:click='sumar' class="btn btn-success">+</button>
    <button wire:click='restar' class="btn btn-success">-</button>

    <br>
    <br>
    <button wire:click='cambio' class="btn btn-info"> {{$activo==true ? 'Activo': 'Desactivado'}}</button>
    <br>
    <br>
    <button class="btn btn-{{$activo==true ? 'success': 'danger'}}">Cambio</button>
    <br>
    <br>
</div>
