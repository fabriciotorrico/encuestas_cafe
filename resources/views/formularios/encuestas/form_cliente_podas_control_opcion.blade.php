@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
<section  id="contenido_principal">
<section  id="content">

    <div class="" >
        <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 myform-cont" >

                     <div class="myform-top">
                        <div class="myform-top-left">
                           {{-- <img  src="" class="img-responsive logo" /> --}}
                          <h3>Podas y Control de maleza</h3>
                            <p>Por favor pulse sobre cada uno de los botones para subir los datos al Servidor</p>
                        </div>
                        <div class="myform-top-right">
                          <i class="fa fa-server"></i>
                        </div>
                      </div>

                  <div class="col-md-12" >
                    @if (count($errors) > 0)

                        <div class="alert alert-danger">
                            <strong>UPPS!</strong> Error al Registrar<br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                </div  >

				<div class="row">
					<div class="col-md-6">
						<div class="myform-bottom">
							<form action="{{ url('cliente_podas_guardar') }}"  method="get">
								<input type="hidden" name="" value="">
								<br>
								<button type="submit" style="font-size: 16px; padding: 30px;width: 100%; background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#87CEEB), color-stop(100%,#4682B4)); -webkit-box-shadow: inset 0px 0px 6px #fff; border-radius: 10px;">
									<div class="">
										<div class="">
											<span  style='font-size: 20px; color:black; height: 50px; font-weight:bold; text-align:center' class="">Podas</span>
											<br>
											{{-- <span class="info-box-number">Tipo de Podas</span> --}}
										</div>
									</div>
								</button>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="myform-bottom">
							<form action="{{ url('cliente_control_malezas_guardar') }}"  method="get">
								<input type="hidden" name="" value="">
								<br>
								<button type="submit" style="font-size: 16px; padding: 30px;width: 100%; background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#87CEEB), color-stop(100%,#4682B4)); -webkit-box-shadow: inset 0px 0px 6px #fff; border-radius: 10px;">
									<div class="">
										<div class="">
											<span  style='font-size: 20px; color:black; height: 50px; font-weight:bold; text-align:center' class="">Control de Maleza</span>
											<br>
											<!--span class="info-box-number">Cultivos Asociados al Café</span-->
										</div>
									</div>
								</button>
							</form>

						</div>
					</div>
				</div>

              </div>
            </div>

        </div>
      </div>

</section>

</section>
@endsection
