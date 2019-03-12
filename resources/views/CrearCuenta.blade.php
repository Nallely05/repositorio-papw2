@extends('layouts.master')
@section('title','Crear cuenta')
@section('contenido')
<!--CONTENIDO-->
<br>
    <div class="container-fluid">
    <div class="card">
        <section class="container">
                <br><br>
                <form>
                    <div class="form-row">
                        <section class="container">
                        <div class="col-md-5 mb-3">
                            <label for="validationServer01">Nombre</label>
                            <input type="text" class="form-control" id="validationServer01" placeholder="Nombre de usuario" required>
                            <!--<div class="valid-feedback">
                              Looks good!
                            </div>-->
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="validationServerUsername">Correo electrónico</label>
                            <div class="input-group">
                              <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Correo electrónico" aria-describedby="inputGroupPrepend3" required>
                              <div class="invalid-feedback">
                                Introduzca su correo electrónico.
                              </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                                <label for="validationServer01">Edad</label>
                                <input type="number" class="form-control" id="validationServer01" placeholder="Edad">
                            </div>
                        
                        <div class="col-md-8 mb-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirmar contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                                    <br>
                                    <button type="submit" class="btn btn-primary" onclick="window.location.href='/perfil'">Crear cuenta</button>
                                </div>
                        </div>
                        </section>
                    </div>
                    <br><br><br>
                </form>
    </div>
    </div>
@stop