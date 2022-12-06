<div>
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
                            <th>Programa</th>
                            <th style="width: 40px">Estado Global</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programas as $programa)
                            <tr>
                                <td><span class="badge badge-primary">{{$proyecto['id']}}</span></td>
                                <td>{{$proyecto['nombre']}}</td>
                                <td>{{$proyecto['clave']}}</td>
                                <td>{{$proyecto['programa_id']}}</td>
                                <td>{{$proyecto['estados_globales']}}</td>
                                <td>
                                    <a href="programa/{{$proyecto['id']}}/show" class="bt brn-info btn-sm" title="Mostrar Informacion" href="">Abrir <i class="fa fa-eye"></i></a>
                                    <a href="programa/{{$proyecto['id']}}/edit" class="bt brn-primary btn-sm" title="Modificar Informacion" href="">Editar <i class="fa fa-edit"></i></a>
                                    <button wire:click='ConfirmarDelete("{{$proyecto['id']}}")' class="bt brn-danger btn-sm" title="Eliminar Informacion" href="">Eliminar <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class=“container” style="width: 25%; margin: 0 auto">
                <a class="btn btn-block btn-success" href="/programa/create" width="100 px"><i class="fa fa-save"></i> CREAR PROGRAMA</a>
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
</div>