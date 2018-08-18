@extends('layouts.master')
@section('titulo','Principal')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-tabs nav-fill w-50">
                    <li class="nav-item">
                        <a class="nav-link active shadow" data-toggle="tab" href="#home" style="color: #1c7430">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link shadow" data-toggle="tab" href="#profile" style="color: #1c7430">Beneficios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link shadow" data-toggle="tab" href="#other" style="color: #1c7430">Proceso</a>
                    </li>
                </ul>
                <br>
                <div id="myTabContent" class="tab-content" style="color: #1c7430">
                    <div class="tab-pane fade active show text-justify" id="home">
                        <img src="{{ Storage::disk('s3')->url('ecoimg/img/home001.jpg') }}" alt="home"
                             width="70%" height="340" style="display: block;margin-left: auto;margin-right: auto;">
                        <br>
                        <p class="text-success text-justify"
                           style="display: block;margin-left: 70px;margin-right: 70px;">
                            La gestión integral de residuos es uno de los principales retos del país.
                        </p>
                        <p class="text-success text-justify"
                           style="display: block;margin-left: 70px;margin-right: 70px;">
                            Cada día generamos <b>4 000</b> toneladas de desechos y un <b>80%</b> de estos materiales
                            que se envían al relleno sanitario pueden ser residuos valorizables como plástico,
                            tetra pak, vidrio, hojalata y aluminio, entre otros.
                        </p>
                        <p class="text-success text-justify"
                           style="display: block;margin-left: 70px;margin-right: 70px;">
                            Por este motivo surgió la iniciativa <b>Ecomonedas</b>, cuyo objetivo es promover
                            la correcta disposición de materiales valorizables e impulsar una economía verde
                            y solidaria en el país a través de un plan de incentivos.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <img src="{{ Storage::disk('s3')->url('ecoimg/img/home003.jpg') }}" alt="home"
                             width="70%" height="340" style="display: block;margin-left: auto;margin-right: auto;">
                        <br>
                        <p class="text-success text-justify" style="display: block;margin-left: 70px;margin-right: 70px;">
                            <span>Con <strong>Ecomonedas</strong> buscamos beneficiar a:</span>
                        </p>
                        <ul style="display: block;margin-left: 70px;margin-right: 70px;">
                            <li class="text-success">
                                <span>Personas de todo el país, de todas las edades y niveles socio económicos.</span>
                            </li>
                            <li class="text-success">
                                <span>Personas de todo el país, de todas las edades y niveles socio económicos.</span>
                            </li>
                            <li class="text-success">
                                <span>Personas de todo el país, de todas las edades y niveles socio económicos.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="other">
                        <img src="{{ Storage::disk('s3')->url('ecoimg/img/home002.jpg') }}" alt="home"
                             width="70%" height="340" style="display: block;margin-left: auto;margin-right: auto;">
                        <br>
                        <p class="text-success text-justify"
                           style="display: block;margin-left: 70px;margin-right: 70px;">
                            Es tan fácil como llevar tus materiales reciclables limpios y separados al centro de acopio
                            más cercano y realizar el canje por <b>Ecomonedas</b>.
                        </p>
                        <p class="text-success text-justify"
                           style="display: block;margin-left: 70px;margin-right: 70px;">
                            Luego puedes utilizar el saldo acumulado en tu billetera vrtual para canjearlo por alguno
                            de los productos presentes en los cupones de canje disponibles.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h6 class="text-success">Cupones de Canje Disponibles</h6>
                <br>
                <ul class="list-group text-success">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('cupones-disponibles') }}"
                           class="text-success">Todas</a>
                        <span class="badge badge-pill badge-success">{{ count($cups) }}</span>
                    </li>
                    @foreach($cats as $cat)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('cupones-categoria',['cat'=>$cat->id]) }}"
                               class="text-success">{{ $cat->nombre }}</a>
                            <span class="badge badge-pill badge-success">{{ count($cat->cupones) }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

@endsection
