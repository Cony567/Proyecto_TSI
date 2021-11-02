@extends('layouts.master')

@section("contenido")


<!-- Barra de navegacion incompleta --
<div class="breadcrumb-wrap">
  <div class="container-fluid">
      <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Logearse y Registrarse</li>
      </ul>
  </div>
</div>
-- Breadcrumb End -->


<!-- Comienzo del login -->
<div class="login">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6">    
              <div class="register-form">
                  <form action="usuarios/create" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" type="text" required placeholder="Nombre">
                        </div>
                        <div class="col-md-6">
                            <label>Apellido</label>
                            <input class="form-control" id="apellido" type="text" required placeholder="Apellido">
                        </div>
                        <div class="col-md-6">
                            <label>E-mail</label>
                            <input class="form-control" id="mail" type="email" required placeholder="E-mail">
                        </div>
                        <div class="col-md-6">
                            <label>Numero Telefonico</label>
                            <input class="form-control" id="num-tel" type="number" required placeholder="Numero de Telefono">
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña</label>
                            <input class="form-control" id="pass" type="password" required placeholder="Contraseña">
                        </div>
                        <div class="col-md-6">
                            <label>Verifique Contraseña</label>
                            <input class="form-control" type="password" required placeholder="Contraseña">
                            
                        </div>
                        <div class="col-md-12">
                            <button class="btn" type="submit">Registrarme</button>
                        </div>
                    </div>
                  </form>
                  
              </div>
          </div>
          <div class="col-lg-6">
              <div class="login-form">
                  <div class="row">
                      <div class="col-md-6">
                          <label>E-mail / Nombre de Usuario</label>
                          <input class="form-control" type="text" id="user-txt" placeholder="E-mail / Username">
                      </div>
                      <div class="col-md-6">
                          <label>Contraseña</label>
                          <input class="form-control" type="password" id="pass-txt" placeholder="Contraseña">
                      </div>
                      <div class="col-md-12">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="newaccount">
                              <label class="custom-control-label" for="newaccount">Mantenme Conectado</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button class="btn" id="btn-ingresar-login">Ingresar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Login Fin -->

@endsection

@section('javascript')
<script src="{{asset('javascript/crear_perfil_login.js')}}"></script>
@endsection