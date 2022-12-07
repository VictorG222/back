<div>


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">TABLA DE PROYECTOS</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nombre</th>
                        <th>Clave</th>
                        <th>Programa_id</th>
                        <th style="width: 40px">Estado Global</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyectos as $proyecto)
                        <tr>
                            <td><span class="badge badge-primary">{{$proyecto['id']}}</span></td>
                            <td>{{$proyecto['nombre']}}</td>
                            <td>{{$proyecto['descripcion']}}</td>
                            <td>{{$proyecto['areas_id']}}</td>
                            <td>{{$proyecto['estados_globales']}}</td>
                            <td>
                                <a href="proyecto/{{$proyecto['id']}}/show" class="btn btn-info btn-sm" title="Mostrar Informacion" href="">Abrir <i class="fa fa-eye"></i></a>
                                <a href="proyecto/{{$proyecto['id']}}/edit" class="btn btn-primary btn-sm" title="Modificar Informacion" href="">Editar <i class="fa fa-edit"></i></a>
                                <button wire:click='ConfirmarDelete("{{$proyecto['id']}}")' class="btn btn-danger btn-sm" title="Eliminar Informacion" href="">Eliminar <i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class=“container” style="width: 25%; margin: 0 auto">
            <a class="btn btn-block btn-success" href="/proyecto/create" width="100 px"><i class="fa fa-save"></i> CREAR PROYECTO</a>
          </div>



        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
