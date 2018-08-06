@extends('layouts.master')
@section('titulo','Principal')
@section('contenido')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="nav nav-tabs nav-fill w-50">
                    <li class="nav-item">
                        <a class="nav-link active shadow" data-toggle="tab" href="#home" style="color: #1c7430">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link shadow" data-toggle="tab" href="#profile" style="color: #1c7430">Proceso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link shadow" data-toggle="tab" href="#other" style="color: #1c7430">Beneficios</a>
                    </li>
                </ul>
                <br>
                <div id="myTabContent" class="tab-content" style="color: #1c7430">
                    <div class="tab-pane fade active show text-justify" id="home">
                        <img src="{{ Storage::disk('s3')->url('ecoimg/img/home001.jpg') }}" alt="home"
                             width="70%" height="340" style="display: block;margin-left: auto;margin-right: auto;">
                        <br>
                        <p class="text-success" style="display: block;margin-left: 70px;margin-right: 70px;">
                            <span>
                                La gestión integral de residuos es uno de los principales retos del país.
                                Cada día generamos <b>4 000</b> toneladas de desechos y un <b>80%</b> de estos materiales
                                que se envían al relleno sanitario pueden ser residuos valorizables como plástico,
                                tetra pak, vidrio, hojalata y aluminio, entre otros. <br>
                                Por este motivo surgió la iniciativa <b>Ecomonedas</b>, cuyo objetivo es promover
                                la correcta disposición de materiales valorizables e impulsar una economía verde
                                y solidaria en el país a través de un plan de incentivos.
                            </span>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <img src="{{ Storage::disk('s3')->url('ecoimg/img/home002.jpg') }}" alt="home"
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
                        <p class="text-success">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                    </div>
                    <div class="tab-pane fade" id="other">
                        <img src="{{ Storage::disk('s3')->url('ecoimg/img/home003.jpg') }}" alt="home"
                             width="70%" height="340" style="display: block;margin-left: auto;margin-right: auto;">
                        <p class="text-success">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h6 style="color: #1c7430">Lista de Comercios</h6>
                <br>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cras justo odio
                        <span class="badge badge-pill badge-success">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dapibus ac facilisis in
                        <span class="badge badge-pill badge-success">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Morbi leo risus
                        <span class="badge badge-pill badge-success">1</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>

@endsection
