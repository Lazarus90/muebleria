<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Administrador Salas Expo Colón</title>
    
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
</head>
<body>
    <!-- Nav Lateral -->
    <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                Salas Expo Colón <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="assets/img/logo3.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">Administrador Salas Expo Colón</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Usuarios</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Compras</a>
                        <ul class="full-width">
                            <li><a href="nuevaCompra.html" class="waves-effect waves-light">Nueva Compra</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="verCompras.html" class="waves-effect waves-light">Compras Recientes</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-widgets zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Productos</a>
                        <ul class="full-width">
                            <li><a href="nuevoProducto.html" class="waves-effect waves-light">Nuevo Producto</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="verProductos.html" class="waves-effect waves-light">Ver Productos</a></li>
                        </ul>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-view-web zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Proveedores</a>
                        <ul class="full-width">
                            <li><a href="nuevoProvee.html" class="waves-effect waves-light">Nuevo Proveedor</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="verProvee.html" class="waves-effect waves-light">Ver Proveedores</a></li>
                        </ul>
                    </li>   
                </ul>
            </div>  
        </div>  
    </section>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">Nombre de Usuario</li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
                <li>
                    <a href="#" class="tooltipped waves-effect waves-light btn-Notification" data-position="bottom" data-delay="50" data-tooltip="Notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <span class="ContentPage-Nav-indicator bg-danger">2</span>
                    </a>
                </li>
            </ul>   
        </div>

        <!-- Notifications area -->
        <section class="z-depth-3 NotificationArea">
            <div class="full-width center-align NotificationArea-title">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>New User Registration</strong> 
                        <br>
                        <small>Just Now</small>
                    </p>
                </div>
            </a>  
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Updates</strong> 
                        <br>
                        <small>30 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as UnRead"></i>
                        <strong>Archive uploaded</strong> 
                        <br>
                        <small>31 Mins Ago</small>
                    </p>
                </div>
            </a> 
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>New Mail</strong> 
                        <br>
                        <small>37 Mins Ago</small>
                    </p>
                </div>
            </a>
            <a href="#" class="waves-effect Notification">
                <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o tooltipped" data-position="left" data-delay="50" data-tooltip="Notification as Read"></i>
                        <strong>Folder delete</strong> 
                        <br>
                        <small>1 hours Ago</small>
                    </p>
                </div>
            </a>  
        </section>

        <div class="row">
            <!-- Tiles -->
            <article class="col s12">
                <div class="full-width center-align" style="margin: 40px 0;">
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-mail-send"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">289</span>
                            <p class="center-align">Usuarios Registrados</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">Ver Detalles &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-shopping-cart"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">12</span>
                            <p class="center-align">Compras Semanales</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">Ver Detalles &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-card"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">17</span>
                            <p class="center-align">Ventas Semanales</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">Ver Detalles &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                </div>   
            </article>

            <!-- Timeline -->
            <article class="col s12">
                <h4>Comentarios de Redes Sociales</h4>
                <hr>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge bg-info"><i class="zmdi zmdi-twitter"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title">Lorem ipsum dolor</h5>
                                <p><small class="text-muted"><i class="zmdi zmdi-time"></i> 11 hours ago via Twitter</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge bg-primary"><i class="zmdi zmdi-facebook"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title">Lorem ipsum dolor</h5>
                                <p><small class="text-muted"><i class="zmdi zmdi-time"></i> 10 hours ago via Facebook</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge bg-success"><i class="zmdi zmdi-whatsapp"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title success">Lorem ipsum dolor</h5>
                                <p><small class="text-muted"><i class="zmdi zmdi-time"></i> 9 hours ago via Whatsapp</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge bg-danger"><i class="zmdi zmdi-pinterest"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title">Lorem ipsum dolor</h5>
                                <p><small class="text-muted"><i class="zmdi zmdi-time"></i> 8 hours ago via Pinterest</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </article>
        </div>

        <!-- Footer -->   
        <footer class="footer-MaterialDark">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Salas Expo Colón</h5>
                        <p class="grey-text text-lighten-4">
                            Av Colón #1212
                            <br>
                            bla bla
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text"></h5>
                        <ul>
                            Programación Web
                        </ul>
                    </div>
                </div>
            </div>
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    Salas Expo Colón 2017
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>