@extends('layouts.master')

@section('contenido')
<div class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">    
                <div class="register-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Nombre">
                        </div>
                        <div class="col-md-6">
                            <label>Apellido</label>
                            <input class="form-control" type="text" placeholder="Apellido">
                        </div>
                        <div class="col-md-6">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="E-mail">
                        </div>
                        <div class="col-md-6">
                            <label>Numero Telefonico</label>
                            <input class="form-control" type="text" placeholder="Numero de Telefono">
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña</label>
                            <input class="form-control" type="text" placeholder="Contraseña">
                        </div>
                        <div class="col-md-6">
                            <label>Verifique Contraseña</label>
                            <input class="form-control" type="text" placeholder="Contraseña">
                        </div>
                        <div class="col-md-12">
                            <button class="btn">Registrarme</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label>E-mail / Nombre de Usuario</label>
                            <input class="form-control" type="text" placeholder="E-mail / Username">
                        </div>
                        <div class="col-md-6">
                            <label>Contraseña</label>
                            <input class="form-control" type="text" placeholder="Contraseña">
                        </div>
                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Mantenme Conectado</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn">Ingresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection