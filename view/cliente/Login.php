<div class="row">
    <div class="col-md-6 text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1 class="page-header">Iniciar Sesion</h1>
            </div>
            <div class="panel-body">
                <form action="?c=Login&a=Ingresar" method="post">
                    <h2>Login</h2>
                    <div class="form-group">
                         <input type="text" class="form-control" placeholder="&#128272; Usuario" name="usuarios"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="&#128273; Contraseña" name="clave"/>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-info">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h1 class="page-header text-center">Registrarse</h1>
            </div>
            <div class="panel-body">
                <form id="frm-login" action="?c=Login&a=Guardar" method="post" >
                    <div class="form-group">
                        <label>Cedula Cliente: </label>
                        <input type="text" name="idCliente" class="form-control" placeholder="Numero de cedula" data-validacion-tipo="requerido|min:9" />
                    </div>
                    <div class="form-group">
                        <label>Nombre Completo: </label>
                        <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:10" />
                    </div>

                    <div class="form-group">
                        <label>Email: </label>
                        <input type="text" name="email" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido" />
                    </div>

                    <div class="form-group">
                        <label>Telefono: </label>
                        <input type="text" name="telefono" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido" />
                    </div>

                    <div class="form-group">
                        <label>Nombre de Usuario: </label>
                        <input type="text" name="nomUsuario" class="form-control" placeholder="Ingrese un nombre de usuario" data-validacion-tipo="requerido" />
                    </div>

                    <div class="form-group">
                        <label>Contraseña: </label>
                        <input type="password" name="contraseña" class="form-control" placeholder="Ingrese una contraseña" data-validacion-tipo="requerido" />
                    </div>

                    <div class="form-group">
                        <label>Sexo: </label>
                        <select name="sexo" class="form-control">
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Provincia: </label>
                        <select name="provincia" class="form-control">
                            <option  value="1">Guanacaste</option>
                            <option  value="2">Puntarenas</option>
                            <option  value="3">San José</option>
                            <option  value="4">Cartago</option>
                            <option  value="5">Heredia</option>
                            <option  value="6">Alajuela</option>
                            <option  value="7">Limón</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Cantón: </label>
                        <input type="text" name="canton" class="form-control" placeholder="Ingrese el cantón donde vive" data-validacion-tipo="requerido" />
                    </div>

                    <div class="form-group">
                        <label>Dirección Exacta: </label>
                        <textarea type="text" name="dirExacta" class="form-control" placeholder="Ingrese la dirección exacta en donde vive" data-validacion-tipo="requerido"></textarea>
                    </div>

                    <hr />

                    <div class="text-center">
                        <button class="btn btn-info">Guardar</button>
                    </div>
                </form>

                <script>
                    $(document).ready(function () {
                        $("#frm-login").submit(function () {
                            return $(this).validate();
                        });
                    })
                </script>
            </div>
        </div>
    </div>
</div>





