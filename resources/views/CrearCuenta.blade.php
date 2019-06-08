@extends('layouts.master')
@section('title','Crear cuenta')
@section('contenido')
<!--CONTENIDO-->
<br>
    <div class="container-fluid">
    <div class="card">
        <section class="container">
                <br><br>
                <form  method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="form-row">
                        <section class="container">
                        <div class="col-md-6 mb-3">
                            <label for="nombreUsuario">Nombre</label>
                            <input type="text" class="form-control" name="name" id="nombreUsuario" placeholder="Nombre de usuario" value="{{old('name')}}" required>
                           
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="correo">Correo electrónico</label>
                            <div class="input-group">
                              <input type="email" class="form-control" id="correo" name="email" placeholder="Correo electrónico" aria-describedby="inputGroupPrepend3" value="{{old('email')}}" required>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                        <div class="col-md-6 mb-3">
                            <strong style="color:red;">Correo ya registrado</strong>
                        </div>
                          @endif
                         <div class="col-md-4 mb-2">
                         <label for="fechaCumple">Fecha de nacimiento:</label><br>
                         <input type="date" id="fechaCumple" class="form-control" name="fechaNacimiento" value="{{old('fechaNacimiento')}}">
                        </div>
                       
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="contra">Contraseña (Mínimo 6 caracteres)</label>
                                <input type="password" class="form-control" id="contra" name="password" placeholder="Contraseña" value="{{old('password')}}">
                            </div>
                        </div>
                        <div id="errorContra" class="col-md-6 mb-3">
                            <strong id="errorText" class="text-danger">Mínimo 6 caracteres</strong>
                        </div>
                        <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="confirmarContra">Confirmar contraseña</label>
                                    <input type="password" class="form-control" id="confirmarContra" name="password_confirmation" placeholder="Contraseña" value="{{old('password_confirmation')}}">
                                    <br>
                                    <button type="submit" class="btn btn-primary" id="crearUsuario" disabled>Crear cuenta</button>
                                </div>
                        </div>
                        </section>
                    </div>
                    <br><br><br>
                </form>
    </div>
    </div>

    <script>
    $(document).ready(function(){
        localStorage.setItem("tour_end","no");
        localStorage.setItem("tour_current_step",1);
        $("#errorContra").hide();
    function validarContra(){
        if($("#contra").val()==$("#confirmarContra").val() && $("#correo").val()!="" && $("#nombreUsuario").val()!="" && $("#fechaCumple").val()!="")
        {
            if($("#confirmarContra").val().length>=6)
            {
                $("#crearUsuario").removeAttr("disabled");
                $("#errorContra").hide();
            }
            else
            {
                $("#errorContra").show();
            }
        }
        else
        {
            $("#errorContra").show();
            $("#crearUsuario").attr("disabled","disabled");
           
        }
        
            $("#errorText").text("Tienes: "+$("#contra").val().length+" caracteres");
    }
        $("#contra").keyup(function(){
        validarContra();
        });
        $("#confirmarContra").keyup(function(){
        validarContra();
        });
       
    });
    </script>
@stop