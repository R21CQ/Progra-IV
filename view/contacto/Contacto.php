<!-- CSS ------------------------------------------------------------------- -->
<link rel="stylesheet" href="archivos/css/estiloContacto.css" type="text/css"/>

<!-- SCRIPT ---------------------------------------------------------------- -->
<script src="archivos/js/catchaScript.js" type="text/javascript"></script>



<div class="col-md-12">
    <div class="row text-center">        
        <div class="col-md-6">
            <h2>Información de Contacto</h2>
            <br><br><br>

            <div class="col-md-6 text-center">
                <p>Ciclo Taller Frank #1</p>
                <p class="icon icon-phone">     
                    2666-3565</p>
            </div>

            <div class="col-md-6 text-center">
                <p>Ciclo Taller Frank #2</p>
                <p class="icon icon-phone">     
                    2665-0655</p>
            </div>

            <div id="email">
                <p>frankliberia@hotmail.com</p>
            </div>


            <div class="col-md-12 text-center" id="horario">
                <h3>Nuestro Horario de Atención</h3>
                <table id="tabla">
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
        </div>

        
        <div class="col-md-6" id="formulario">
            <div class="panel panel-info">
                <div class="panel-heading text-center">
                    <h1 class="page-header">Contáctenos</h1>
                </div>
                <div class="panel-body">
                    <form action="?c=Login&a=Ingresar" method="post">
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

                        <div class="form-group" id="catcha_elemento">
                            
                        </div>
                        
                        <div class="text-center">
                            <button class="btn btn-info btn-lg btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
        </div>
    </div>
</div>

