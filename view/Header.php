<!DOCTYPE html>

<html lang="es">
    
    <head>
        <title>Ciclo Taller Frank</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       
        <link rel="stylesheet" href="archivos/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="archivos/css/estiloHeader.css" type="text/css"/>
        <link rel="stylesheet" href="archivos/css/iconos.css" type="text/css">   <!--Para iconos -->
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>         
    </head>
    
    
    <body>
        <div class="container">            
            <header>
                <div class="row">
                    <div class="col-md-3">
                        <a title="Inicio" href="Index.php"><img src="archivos/imagenes/logo.jpg" width="180" height="140" class="img-thumbnail"></a>
                    </div>

                    <div class="col-md-6">
                        <h1>CICLO TALLER <br> FRANK</h1>
                    </div>

                    <div class="col-md-3">
                        <p>Ciclo Taller Frank #1</p>
                        <p class="icon icon-phone">     2666-3565</p>
                        <p>Ciclo Taller Frank #2</p>
                        <p class="icon icon-phone">     2665-0655</p>
                    </div>
                </div>      
                
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                                <span class="sr-only">MENÚ</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="Index.php" class="navbar-brand">CicloFrank</a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Productos <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="?c=Articulo&a=Index">Articulos</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button">Localización <span class="caret"></span></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="?c=Localizacion&a=Index">Nuestra Localización</a></li>
                                    </ul>
                                </li>  
                                
                                <li class="dropdown"><a href="?c=Contacto&a=Index">Contáctenos</a></li>

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button">Noticias <span class="caret"></span></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="?c=Noticias&a=Index">Próximos Eventos</a></li>
                                    </ul>
                                </li>                    

                                <li class="dropdown"><a href="?c=Login&a=Index">Registrarse</a></li>

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button">Acerca de <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="?c=Acerca&a=Index">Misión, Visión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>