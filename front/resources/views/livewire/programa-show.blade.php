<div>
    <div class="col-md-8 mx-auto">
        <div class="card card-widget widget-user-2">
            <div class="widget-user-header bg-success">
                <div class="widget-user-image">
                    <img class="img-circle elevation-2"
                        src="https://cdn.pixabay.com/photo/2020/07/14/13/07/icon-5404125_1280.png" alt="User Avatar">
                </div>

                <h3 class="widget-user-username"> {{ $programa['nombre'] }}</h3>
                <h5 class="widget-user-desc">Descripcion {{ $programa['descripcion'] }}</h5>
            </div>
            <div class="card-footer p-0">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="nav-link">
                            ID <span class="float-right badge bg-primary">{{ $programa['id'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            Nombre <span class="float-right badge bg-primary">{{ $programa['nombre'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            AREA <span class="float-right">{{ $programa['areas_id'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            ESTADO GLOBAL <span class="float-right">{{ $programa['estados_globales_id'] }}</span>
                        </span>
                    </li>
                    <a class="btn btn-block btn-outline-success btn-sm" href="/programas"><i
                            class="fa fa-home"></i>Regresar</a>
                </ul>
            </div>
        </div>
    </div>
</div>
