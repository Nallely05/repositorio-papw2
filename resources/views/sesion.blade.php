@extends('layouts.master')
@section('title','Iniciar Sesión')
@section('contenido')
<br>
    <div class="container-fluid">
    <div class="card">
            <br><br>
        <section class="container">
                <br>
                <table><th>
                        <td>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Correo" value="{{old('email')}}" required>
                        <small id="emailHelp" class="form-text text-muted">Su correo nunca será compartido con nadie más.</small>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Contraseña" required>
                        </div>
                        @if ($errors->has('email'))
                        <div>
                            <strong style="color:red;">Correo inexistente o contraseña equivocada</strong>
                        </div>
                          @endif
                        <button type="submit" class="btn btn-primary" onclick="window.location.href='/perfil'">Iniciar Sesión</button> 
                        <br>
                    </form>
                </td>
                </th>
                <th>
                    <td>
                        <form style="padding: 10%;" action="/CrearCuenta">
                            <h3>¿Aún no eres usuario de Hispanofic? Únete:</h3>
                                <button type="submit" class="btn btn-primary">Crear cuenta</button> 
                                <br>
                        </form>
                    </td>
                </th>
            
            </table>
            <br><br><br><br><br><br><br><br><br><br><br>
        </section>
    </div>
    </div>
    @stop