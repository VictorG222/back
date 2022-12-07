<div>
    <div class="col-md-8 mx-auto">
        <div class="card card-widget widget-user-2">
            <div class="widget-user-header bg-success">

                <h5 class="widget-user-desc">Estado Global</h5>
            </div>
            <div class="card-footer p-0">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="nav-link">
                            ID <span class="float-right badge bg-primary">{{ $estado['id'] }}</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            Descripcion <span class="float-right">{{ $estado['descripcion'] }}</span>
                        </span>
                    </li>
                    <a class="btn btn-block btn-outline-success btn-mx" href="/estado"><i
                            class="fa fa-home"></i>Regresar</a>
                </ul>
            </div>
        </div>
    </div>
</div>
