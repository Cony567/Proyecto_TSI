@extends('layouts.master')

@section("contenido")


        
        <!-- Inicio de Mi Cuenta -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 mb-5">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Panel De Control</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Mis Publicaciones</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Busqueda de Publicaciones</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Detalles de Usuario</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Detalles De Cuenta</a>
                            <a class="nav-link" :href="route('logout')"onclick="event.preventDefault();">
                                        <i class="fa fa-sign-out-alt"></i>Cerrar Sesion</a>
                        <!--
                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Cierre Sesión') }}
                                        </x-dropdown-link>
                        -->
                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Panel</h4>
                                <p>
                                    Bienvenidos a Nuestra Pagina "Busca Trabajos" la cual ha sido desarrollada con el fin de ayudarle a encontrar trabajos esporadicos, corto plazo y largo plazo.
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Publicacion</th>
                                                <th>Fecha</th>                                                
                                                <th>Estado</th>
                                                <th>Ir a la Publicacion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nombre de la Publicacion</td>
                                                <td>09 Agosto 2021</td>                                                
                                                <td>Aprobado</td>
                                                <td><button class="btn">Ver</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Nombre de la Publicacion</td>
                                                <td>09 Agosto 2021</td>                                               
                                                <td>Aprobado</td>
                                                <td><button class="btn">Ver</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Nombre de la Publicacion</td>
                                                <td>09 Agosto 2021</td>
                                                <td>Aprobado</td>
                                                <td><button class="btn">Ver</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Busqueda de Publicaciones</h4>
                                <p>
                                    Redireccionar a Busquedas
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Detalles del Usuario</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Nombre</h5>
                                        <p>Tipo De Usuario</p>
                                        <p>Numero Telefonico </p>
                                        <button class="btn">Editar Email</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Direccion</h5>
                                        <p>2772 San Jose De Maipo, Santiago</p>
                                        <button class="btn">Editar Direccion</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Detalles de la cuenta</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nombre">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Apellido">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Numero Telefonico">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Direccion">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Actualizar Datos</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Cambiar Contraseña</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Contraseña Actual">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nueva Contraseña">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Confirmar Contraseña">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Guardar Cambios </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Termino de Mi Cuenta -->


@endsection
@section('javascript')
	
@endsection
