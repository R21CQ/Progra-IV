<div class="row">
    <div class="col-md-5 text-center">
        <br><br>
        <p>Ciclo Taller Frank #1</p>
        <p class="icon icon-phone">     2666-3565</p>
        <p>Ciclo Taller Frank #2</p>
        <p class="icon icon-phone">     2665-0655</p>

        <p>frankliberia@hotmail.com</p>
        <br>

        <h1>Nuestro Horario de Atención</h1>
        <table id="tabla" class="table table-striped">
            <thead>
                <tr>
                    <th style="width:290px;">Dia</th>
                    <th style="width:310px;">Hora</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lunes</td>
                    <td>8:00 - 18:30</td>
                </tr>

                <tr>
                    <td>Martes</td>
                    <td>8:00 - 18:30</td>
                </tr>

                <tr>
                    <td>Miércoles</td>
                    <td>8:00 - 18:30</td>
                </tr>

                <tr>
                    <td>Jueves</td>
                    <td>8:00 - 18:30</td>
                </tr>

                <tr>
                    <td>Viernes</td>
                    <td>8:00 - 18:30</td>
                </tr>

                <tr>
                    <td>Sábado</td>
                    <td>8:00 - 18:30</td>
                </tr>

                <tr>
                    <td>Domingo</td>
                    <td>CERRADO</td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="col-md-7">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h1 class="page-header">Contacto</h1>
            </div>
            <div class="panel-body">
                <form action="?c=Login&a=Ingresar" method="post">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label>Nombre Completo:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre completo" name="nombre" data-validacion-tipo="requerido|min:10" />
                    </div>
                    <div class="form-group">
                        <label>Correo Electronico:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su correo electronico" name="nombre" data-validacion-tipo="requerido|email" />
                    </div>
                    <div class="form-group">
                        <label>Numero de Telefono:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su telefono" name="nombre" data-validacion-tipo="requerido|min:8" />
                    </div>
                    <div class="form-group">
                        <label>Consulta:</label>
                        <textarea type="text" class="form-control" placeholder="Ingrese su comentario" name="nombre" data-validacion-tipo="requerido"></textarea>
                    </div>

                    <div class="form-group" id="catcha_elemento"></div>
                    <div class="text-center">
                        <button class="btn btn-info btn-lg btn-block">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    </div>

</div>

