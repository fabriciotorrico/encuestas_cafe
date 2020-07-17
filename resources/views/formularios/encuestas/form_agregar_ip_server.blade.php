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
              <div class="col-sm-6 col-sm-offset-3 myform-cont" >

                 <div class="myform-top">
                    <div class="myform-top-left">
                       {{-- <img  src="" class="img-responsive logo" /> --}}
                      <h3>Dirección del Servidor</h3>
                        <p>Por favor ingrese la IP</p>
                    </div>
                    <div class="myform-top-right">
                      <i class="fa fa-edit"></i>
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

                    <div id="div_notificacion_sol" class="myform-bottom">

                      <form action="{{ route('agregar_ip_server', ['id' => $dato->id_ip_servidor ?? 1])}}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br>
                        <div class="form-group">
                          <label >Dirección IP del Servidor</label>
                        <input type="text" name="ip" id="ip" class="form-control" value="{{old('ip', $dato->ip ?? '')}}" required/ >
												</div>
                        <br>
												<br>
                        <button type="submit" class="mybtn">Actualizar</button>
                      </form>

                    </div>
              </div>
            </div>
        </div>
      </div>

</section>

</section>
@endsection
