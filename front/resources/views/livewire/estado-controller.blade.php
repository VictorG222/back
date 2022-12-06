<div>


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">TABLA DE ESTADOS</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estados as $estado)
                        <tr>
                            <td><span class="badge badge-primary">{{$estado['id']}}</span></td>
                            <td>{{$estado['descripcion']}}</td>
                            <td>
                                {{-- <a href="estados/{{$estado['id']}}/show" class="bt brn-info btn-sm" title="Mostrar Informacion" href=""><i class="fa fa-eye"> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <div class=“container” style="width: 25%; margin: 0 auto">
            {{-- <a class="btn btn-block btn-success" href="/estado/create" width="100 px"><i class="fa fa-save"></i> CREAR estado</a> --}}
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
