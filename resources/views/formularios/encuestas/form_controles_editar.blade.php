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
                      <h3>Control de maleza</h3>
                        <p>Por favor responda las siguientes preguntas (Editando)</p>
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

                    <form action="{{ route('controles_actualizar', ['id' => $dato->id_control_maleza]) }}"  method="post" class="" >
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">



                      {{-- METODO BIOLOGICO --}}
											<!--Se borro por peticion del cliente, se pone 0 para guardar vacio en la bd-->
											<input type="hidden" name="biologico" value="0">
                      <!--br>
                      <h4 style="color:white">Métodos Biológicos</h4>
                      <div class="form-group">
                        <label >¿Empleó métodos biológicos para el control de maleza?</label>
                        <br>
                        <input type="radio" id="biologico_si" name="biologico" value="1" onchange="mostrar_biologico()" {{ $dato->biologico == 1 ? 'checked' : ''}}> Si &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="biologico_no" name="biologico" value="0" onchange="mostrar_biologico()" {{ $dato->biologico == 0 ? 'checked' : ''}}> No
                      </div>

                      <div class="content_biologico" id="content_biologico">
                        <div class="form-group">
                          <label >Fecha en que se emplearon Metodos Biológicos</label>
                          <input type="date" name="biologico_fecha" id="biologico_fecha" value="{{old('biologico_fecha', $dato->biologico_fecha ?? '')}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Producto Biológico empleado</label>
                          <input type="text" name="biologico_producto" id="biologico_producto" value="{{old('biologico_producto', $dato->biologico_producto ?? '')}}" class="form-control" required>
                        </div>
                      </div-->

											{{-- METODO mecanico --}}
                      <br>
                      <h4 style="color:white">Métodos mecánicos</h4>
                      <div class="form-group">
                        <!--label >¿Empleó métodos mecánicos para el control de maleza?</label>
                        <br-->
                        <input type="radio" id="mecanico_si" name="mecanico" value="1" onchange="mostrar_mecanico()" {{ $dato->mecanico == 1 ? 'checked' : ''}}> Si &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="mecanico_no" name="mecanico" value="0" onchange="mostrar_mecanico()" {{ $dato->mecanico == 0 ? 'checked' : ''}}> No
                      </div>

                      <div class="content_mecanico" id="content_mecanico">
                        <div class="form-group">
                          <label >Fecha en que se emplearon metodos mecánicos</label>
                          <input type="date" name="mecanico_fecha" id="mecanico_fecha" value="{{old('mecanico_fecha', $dato->mecanico_fecha ?? '')}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Producto mecánico empleado</label>
                          <input type="text" name="mecanico_producto" id="mecanico_producto" value="{{old('mecanico_producto', $dato->mecanico_producto ?? '')}}" class="form-control" required>
                        </div>
                      </div>


                      {{-- METODO QUIMICO --}}
                      <br>
                      <h4 style="color:white">Métodos químicos</h4>
                      <div class="form-group">
                        <!--label >¿Empleó métodos químicos para el control de maleza?</label>
                        <br-->
                        <input type="radio" id="quimico_si" name="quimico" value="1" onchange="mostrar_quimico()" {{ $dato->quimico == 1 ? 'checked' : ''}}> Si &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="quimico_no" name="quimico" value="0" onchange="mostrar_quimico()" {{ $dato->quimico == 0 ? 'checked' : ''}}> No
                      </div>

                      <div class="content_quimico" id="content_quimico">
                        <div class="form-group">
                          <label >Fecha en que se emplearon metodos químicos</label>
                          <input type="date" name="quimico_fecha" id="quimico_fecha" value="{{old('quimico_fecha', $dato->quimico_fecha ?? '')}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Producto químico empleado</label>
                          <input type="text" name="quimico_producto" id="quimico_producto" value="{{old('quimico_producto', $dato->quimico_producto ?? '')}}" class="form-control" required>
                        </div>
                      </div>

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

@section('scripts')

@parent
<script type="text/javascript">
  //mostrar_biologico();
  mostrar_quimico();
  mostrar_mecanico();
  function mostrar_biologico() {
		biologico_si = document.getElementById("biologico_si");
		if (biologico_si.checked) {
			document.getElementById("content_biologico").style.display='block';
			document.getElementById("biologico_fecha").required = true;
			document.getElementById("biologico_producto").required = true;
		}
		else {
			document.getElementById("content_biologico").style.display='none';
			document.getElementById("biologico_fecha").required = false;
			document.getElementById("biologico_producto").required = false;
		}
  }

  function mostrar_quimico() {
		quimico_si = document.getElementById("quimico_si");
		if (quimico_si.checked) {
			document.getElementById("content_quimico").style.display='block';
			document.getElementById("quimico_fecha").required = true;
			document.getElementById("quimico_producto").required = true;
		}
		else {
			document.getElementById("content_quimico").style.display='none';
			document.getElementById("quimico_fecha").required = false;
			document.getElementById("quimico_producto").required = false;
		}
  }

  function mostrar_mecanico() {
		mecanico_si = document.getElementById("mecanico_si");
		if (mecanico_si.checked) {
			document.getElementById("content_mecanico").style.display='block';
			document.getElementById("mecanico_fecha").required = true;
			document.getElementById("mecanico_producto").required = true;
		}
		else {
			document.getElementById("content_mecanico").style.display='none';
			document.getElementById("mecanico_fecha").required = false;
			document.getElementById("mecanico_producto").required = false;
		}
  }


</script>
@endsection
