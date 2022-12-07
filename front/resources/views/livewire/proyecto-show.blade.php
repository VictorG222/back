<div>
    <div class="col-md-8 mx-auto">
        <div class="card card-widget widget-user-2">
            <div class="widget-user-header bg-success">

                <h3 class="widget-user-username"> {{ $proyecto['nombre'] }}</h3>
            </div>
            <div class="card-footer p-0">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="nav-link">
                            ID <span class="float-right badge bg-primary">{{ $proyecto['id'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            Nombre <span class="float-right">{{ $proyecto['nombre'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            Clave <span class="float-right">{{ $proyecto['clave'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            Programa_ID <span class="float-right">{{ $proyecto['programa_id'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            ESTADO GLOBAL <span class="float-right">{{ $proyecto['estados_globales'] }}</span>
                        </span>
                    </li>
                    <a class="btn btn-block btn-outline-success btn-mx" href="/programa"><i
                            class="fa fa-home"></i>Regresar</a>
                </ul>
            </div>
        </div>
    </div>
</div>
