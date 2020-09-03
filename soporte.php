<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="templates/hospedando-710/favicon.ico">
    <title>Noticias - Hospedando.Com.Mx</title>

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
    <link href="dist/css/all.min.css" rel="stylesheet">
    <link href="dist/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="a18e019e1fe6685e3ebf7039-text/javascript">
        var csrfToken = 'df459b11ab836c52b107a9522d034673e6fdbfe8',
            markdownGuide = 'Guía de Markdown',
            locale = 'en',
            saved = 'guardado',
            saving = 'guardando',
            whmcsBaseUrl = "/paneldeclientes/administracion",
            requiredText = 'Necesario',
            recaptchaSiteKey = "";
    </script>
    <script src="/paneldeclientes/administracion/templates/hospedando-710/js/scripts.min.js?v=fd0392" type="a18e019e1fe6685e3ebf7039-text/javascript"></script>
    <script type="a18e019e1fe6685e3ebf7039-text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-636134-1']);
        _gaq.push(['_setDomainName', 'hospedando.com.mx']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<body data-phone-cc-input="">
    <section id="header">
        <div class="container">
            <ul class="top-nav">
                <li>
                    <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        <i class="fas fa-bell"></i> Notificaciones
                        <span class="label label-warning"><small>NUEVO</small></span>
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                            <li>
                                <a href="/paneldeclientes/administracion/clientarea.php?action=masspay&all=true">
                                    <i class="fas fa-fw fa-info-circle"></i>
                                    <div class="message">Usted tiene 5 facturas(s) sin pagar. Pague ahora para evitar interrupciones de servicio.</div>
                                </a>
                            </li>
                            <li>
                                <a href="/paneldeclientes/administracion/clientarea.php?action=masspay&all=true">
                                    <i class="fas fa-fw fa-exclamation-triangle"></i>
                                    <div class="message">Usted tiene 5 facturas(s) vencida(s) por el monto total de $5,365.01 Pesos. Pague ahora para evitar interrupciones de servicio.</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="primary-action">
                    <a href="/paneldeclientes/administracion/logout.php" class="btn">
                        Salir
                    </a>
                </li>
            </ul>
            <a href="/paneldeclientes/administracion/index.php" class="logo"><img src="https://www.hospedando.com.mx/paneldeclientes/administracion/images/logo.png" alt="Hospedando.Com.Mx"></a>
        </div>
    </section>
    <section id="main-menu">
        <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="primary-nav">


                    <ul class="nav navbar-nav">
                        <li menuItemName="Inicio" class="" id="Primary_Navbar-Home">
                            <a href="https://www.hospedando.com.mx"><i class="fas fa-arrow-circle-left"></i>&nbsp;Regresar al Sitio</a>
                        </li>
                        <li menuItemName="Noticias" class="" id="Primary_Navbar-Announcements">
                            <a href="announcements.php">Noticias</a>
                        </li>
                        <li menuItemName="Servicios" class="dropdown" id="Primary_Navbar-Store">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Servicios&nbsp;<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li menuItemName="Servicios" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="clientarea.php?action=products"><i class="fas fa-server"></i>&nbsp;Mis Servicios</a>
                                </li>
                                <li menuItemName="Divider" class="nav-divider" id="Primary_Navbar-Store-Shop_Divider_1">
                                    <a href="">-----</a>
                                </li>
                                <li menuItemName="Comprar" id="Primary_Navbar-Store-Register_a_New_Domain">
                                    <a href="cart.php"><i class="fas fa-cart-plus"></i>&nbsp;Comprar Nuevo Servicio</a>
                                </li>
                                <li menuItemName="AddOns" id="Primary_Navbar-Store-Transfer_a_Domain_to_Us">
                                    <a href="cart.php?gid=addons"><i class="fas fa-cube"></i>&nbsp;Adicionales Disponibles</a>
                                </li>
                            </ul>
                        </li>
                        <li menuItemName="Dominios" class="dropdown" id="Primary_Navbar-Store">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dominios&nbsp;<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li menuItemName="Dominios" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="clientarea.php?action=domains"><i class="fas fa-globe-americas"></i>&nbsp;Mis Dominios</a>
                                </li>
                                <li menuItemName="Divisor" class="nav-divider" id="Primary_Navbar-Store-Shop_Divider_1">
                                    <a href="">-----</a>
                                </li>
                                <li menuItemName="Renovar Dominio" id="Primary_Navbar-Store-Register_a_New_Domain">
                                    <a href="cart.php?gid=renewals"><i class="fas fa-sync-alt"></i>&nbsp;Renovar Dominios</a>
                                </li>
                                <li menuItemName="Registro Dominio" id="Primary_Navbar-Store-Transfer_a_Domain_to_Us">
                                    <a href="cart.php?a=add&domain=register"><i class="fas fa-cart-plus"></i>&nbsp;Registrar Nuevo Dominio</a>
                                </li>
                                <li menuItemName="Transferencia Dominio" id="Primary_Navbar-Store-Transfer_a_Domain_to_Us">
                                    <a href="cart.php?a=add&domain=transfer"><i class="fas fa-exchange-alt"></i>&nbsp;Transferirnos un Dominio</a>
                                </li>
                                <li menuItemName="Divisor" class="nav-divider" id="Primary_Navbar-Store-Shop_Divider_1">
                                    <a href="">-----</a>
                                </li>
                                <li menuItemName="WhoIs" id="Primary_Navbar-Store-Register_a_New_Domain">
                                    <a href="domainchecker.php"><i class="fas fa-search"></i>&nbsp;WhoIs</a>
                                </li>
                            </ul>
                        </li>
                        <li menuItemName="Servicios" class="dropdown" id="Primary_Navbar-Store">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mis Pagos&nbsp;<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li menuItemName="Recibos" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="clientarea.php?action=invoices"><i class="fas fa-file-invoice"></i>&nbsp;Mis Recibos</a>
                                </li>
                                <li menuItemName="Cotizaciones" id="Primary_Navbar-Store-Register_a_New_Domain">
                                    <a href="clientarea.php?action=quotes"><i class="fas fa-file-invoice-dollar"></i>&nbsp;Mis Cotizaciones</a>
                                </li>
                                <li menuItemName="" class="nav-divider" id="Primary_Navbar-Store-Shop_Divider_1">
                                    <a href="">-----</a>
                                </li>
                                <li menuItemName="Factura" id="Primary_Navbar-Store-Transfer_a_Domain_to_Us">
                                    <a href="https://factura.hospedando.com.mx/"><i class="fas fa-qrcode"></i>&nbsp;Facturación Electrónica</a>
                                </li>
                            </ul>
                        </li>
                        <li menuItemName="Servicios" class="dropdown" id="Primary_Navbar-Store">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Soporte&nbsp;<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li menuItemName="Avisos Mantenimiento" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="serverstatus.php"><i class="fas fa-bullhorn"></i>&nbsp;Avisos de Mantenimiento</a>
                                </li>
                                <li menuItemName="Avisos Mantenimiento" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="supporttickets.php"><i class="fas fa-clipboard-list"></i>&nbsp;Tickets de Soporte</a>
                                </li>
                                <li menuItemName="Abrir Ticket" id="Primary_Navbar-Store-Register_a_New_Domain">
                                    <a href="submitticket.php"><i class="fas fa-envelope"></i>&nbsp;Abrir Ticket</a>
                                </li>
                                <li menuItemName="Avisos Mantenimiento" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="knowledgebase.php"><i class="fas fa-book"></i>&nbsp;Preguntas Frecuentes</a>
                                </li>
                                <li menuItemName="Avisos Mantenimiento" id="Primary_Navbar-Store-Browse_Products_Services">
                                    <a href="clientarea.php?action=emails"><i class="fas fa-paper-plane"></i>&nbsp;Emails Enviados</a>
                                </li>
                                <li menuItemName="Divisor" class="nav-divider" id="Primary_Navbar-Store-Shop_Divider_1">
                                    <a href="">-----</a>
                                </li>
                                <li menuItemName="Abrir Ticket" id="Primary_Navbar-Store-Register_a_New_Domain">
                                    <a href="downloads.php"><i class="fas fa-download"></i>&nbsp;Descargas</a>
                                </li>
                            </ul>
                        </li>
                        <li menuItemName="Afiliados" class="" id="Primary_Navbar-Contact_Us">
                            <a href="affiliates.php">Afiliados</a>
                        </li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <li menuItemName="Cuenta" class="dropdown" id="Secondary_Navbar-Account">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hola <strong>Victor Daniel</strong>&nbsp;<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li menuItemName="Detalles" id="Secondary_Navbar-Account-Login">
                                    <a href="clientarea.php?action=details"><i class="fas fa-user-edit"></i>&nbsp; Editar Detalles de la Cuenta</a>
                                </li>
                                <li menuItemName="Contactos" id="Secondary_Navbar-Account-Register">
                                    <a href="clientarea.php?action=contacts"><i class="fas fa-users"></i>&nbsp; Contactos/Subcuentas</a>
                                </li>
                                <li menuItemName="Emails" id="Secondary_Navbar-Account-Register">
                                    <a href="clientarea.php?action=emails"><i class="fas fa-paper-plane"></i>&nbsp; Emails Enviados</a>
                                </li>
                                <li menuItemName="Password" id="Secondary_Navbar-Account-Register">
                                    <a href="clientarea.php?action=changepw"><i class="fas fa-key"></i>&nbsp; Cambiar Contraseña</a>
                                </li>
                                <li menuItemName="Divider" class="nav-divider" id="Secondary_Navbar-Account-Divider">
                                    <a href="">-----</a>
                                </li>
                                <li menuItemName="Salir" id="Secondary_Navbar-Account-Forgot_Password?">
                                    <a href="logout.php">Salir <i class="fas fa-sign-out-alt"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>
    <section id="main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-9 pull-md-right">
                    <div class="header-lined">
                        <h1>Anuncios <small>Lo último de Hospedando.Com.Mx</small></h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php"> Administración
                                </a> </li>
                            <li class="active">
                                Noticias
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-3 pull-md-left sidebar">
                    <div menuItemName="Announcements Months" class="panel panel-sidebar panel-sidebar hidden-sm hidden-xs">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fas fa-calendar-alt"></i>&nbsp; Por Mes
                                <i class="fas fa-chevron-up panel-minimise pull-right"></i>
                            </h3>
                        </div>
                        <div class="list-group">
                            <a menuItemName="Ene 2020" href="/paneldeclientes/administracion/index.php?rp=/announcements/view/2020-01" class="list-group-item" id="Primary_Sidebar-Announcements_Months-Ene_2020">
                                Ene 2020
                            </a>
                            <a menuItemName="Sept 2019" href="/paneldeclientes/administracion/index.php?rp=/announcements/view/2019-09" class="list-group-item" id="Primary_Sidebar-Announcements_Months-Sept_2019">
                                Sept 2019
                            </a>
                            <a menuItemName="Abr 2018" href="/paneldeclientes/administracion/index.php?rp=/announcements/view/2018-04" class="list-group-item" id="Primary_Sidebar-Announcements_Months-Abr_2018">
                                Abr 2018
                            </a>
                            <a menuItemName="Ene 2018" href="/paneldeclientes/administracion/index.php?rp=/announcements/view/2018-01" class="list-group-item" id="Primary_Sidebar-Announcements_Months-Ene_2018">
                                Ene 2018
                            </a>
                            <a menuItemName="Older" href="/paneldeclientes/administracion/index.php?rp=/announcements/view/older" class="list-group-item" id="Primary_Sidebar-Announcements_Months-Older">
                                Anuncios Antiguos...
                            </a>
                            <a menuItemName="RSS Feed" href="/paneldeclientes/administracion/index.php?rp=/announcements/rss" class="list-group-item" id="Primary_Sidebar-Announcements_Months-RSS_Feed">
                                <i class="fas fa-rss icon-rss"></i>&nbsp; Ver RSS
                            </a>
                        </div>
                    </div>
                    <div class="panel hidden-lg hidden-md panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fas fa-calendar-alt"></i>&nbsp; Por Mes
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <select class="form-control" onchange="if (!window.__cfRLUnblockHandlers) return false; selectChangeNavigate(this)" data-cf-modified-a18e019e1fe6685e3ebf7039-="">
                                    <option menuItemName="Ene 2020" value="/paneldeclientes/administracion/index.php?rp=/announcements/view/2020-01" class="list-group-item">
                                        Ene 2020
                                    </option>
                                    <option menuItemName="Sept 2019" value="/paneldeclientes/administracion/index.php?rp=/announcements/view/2019-09" class="list-group-item">
                                        Sept 2019
                                    </option>
                                    <option menuItemName="Abr 2018" value="/paneldeclientes/administracion/index.php?rp=/announcements/view/2018-04" class="list-group-item">
                                        Abr 2018
                                    </option>
                                    <option menuItemName="Ene 2018" value="/paneldeclientes/administracion/index.php?rp=/announcements/view/2018-01" class="list-group-item">
                                        Ene 2018
                                    </option>
                                    <option menuItemName="Older" value="/paneldeclientes/administracion/index.php?rp=/announcements/view/older" class="list-group-item">
                                        Anuncios Antiguos...
                                    </option>
                                    <option menuItemName="RSS Feed" value="/paneldeclientes/administracion/index.php?rp=/announcements/rss" class="list-group-item">
                                        Ver RSS
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 pull-md-right main-content">
                    <script type="a18e019e1fe6685e3ebf7039-text/javascript">
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="announcement-single">
                        <a href="/paneldeclientes/administracion/index.php?rp=/announcements/29/ASUETO-1º-de-Enero-de-2020.html" class="title">
                            ASUETO: 1º de Enero de 2020
                        </a>
                        <p><br />Deseamos informarte que tendremos limitaciones de horario y atención. El miércoles 1º de enero será día de ASUETO.<br /><br />Te deseamos FELICES FIESTAS!</p>
                        <div class="article-items">
                            <i class="fas fa-calendar-alt fa-fw"></i>
                            1º Ene 2020
                        </div>
                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/29/ASUETO-1º-de-Enero-de-2020.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/29/ASUETO-1º-de-Enero-de-2020.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    </div>
                    <div class="announcement-single">
                        <a href="/paneldeclientes/administracion/index.php?rp=/announcements/28/-Aviso-Importante--sobre-pagos-en-Oxxo.html" class="title">
                            ⚠️ Aviso Importante ⚠️ sobre pagos en Oxxo
                        </a>
                        <p>Se suspenden pagos vía ComproPago.
                            A partir del día 20 de septiembre de 2019, se dejará de ofrecer el servicio de pagos en efectivo vía Oxxo, 7Eleven, Coppel, etc. esto debido a que la empresa que procesaba estos pagos, ComproPago, cerrará operaciones.
                            NO SE DEBE HACER USO DE NINGÚN TICKET DE COMPROPAGO POSTERIOR A ESA FECHA.
                            Puedes ...
                            <a href="/paneldeclientes/administracion/index.php?rp=/announcements/28/-Aviso-Importante--sobre-pagos-en-Oxxo.html" class="label label-warning">Leer Más &raquo;</a>
                        </p>
                        <div class="article-items">
                            <i class="fas fa-calendar-alt fa-fw"></i>
                            18º Sept 2019
                        </div>
                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/28/-Aviso-Importante--sobre-pagos-en-Oxxo.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/28/-Aviso-Importante--sobre-pagos-en-Oxxo.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    </div>
                    <div class="announcement-single">
                        <a href="/paneldeclientes/administracion/index.php?rp=/announcements/27/IMPORTANTE-WordPress-5.2.3-actualizacion-de-seguridad-y-mantenimiento.html" class="title">
                            IMPORTANTE: WordPress 5.2.3, actualización de seguridad y mantenimiento
                        </a>
                        <p>
                            IMPORTANTE: WordPress 5.2.3 Actualización de Seguridad y Mantenimiento.
                            Fecha de publicación: 5 de septiembre de 2019Importancia: 4 - Alta
                            El día 5 de septiembre de 2019 se liberó una actualización de seguridad y mantenimiento de Wordpress. Esta actualización afecta a todas las versiones de Wordpress 5.2.2 y anteriores.
                            Además se ...
                            <a href="/paneldeclientes/administracion/index.php?rp=/announcements/27/IMPORTANTE-WordPress-5.2.3-actualizacion-de-seguridad-y-mantenimiento.html" class="label label-warning">Leer Más &raquo;</a>
                        </p>
                        <div class="article-items">
                            <i class="fas fa-calendar-alt fa-fw"></i>
                            6º Sept 2019
                        </div>
                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/27/IMPORTANTE-WordPress-5.2.3-actualizacion-de-seguridad-y-mantenimiento.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/27/IMPORTANTE-WordPress-5.2.3-actualizacion-de-seguridad-y-mantenimiento.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    </div>
                    <div class="announcement-single">
                        <a href="/paneldeclientes/administracion/index.php?rp=/announcements/24/IMPORTANTE-Wordpress-4.9.5-Actualizacion-de-Seguridad.html" class="title">
                            IMPORTANTE: Wordpress 4.9.5 Actualización de Seguridad
                        </a>
                        <p>
                            IMPORTANTE: Wordpress 4.9.5 Actualizaci&oacute;n de Seguridad y Mantenimiento.
                            El d&iacute;a 3 de Abril 2018 se liber&oacute; una actualizaci&oacute;n de seguridad y mantenimiento de Wordpress. Esta actualizaci&oacute;n afecta a todas las versiones de Wordpress 4.9.4 y anteriores.
                            1. No tratar localhost como el mismo host por defecto.2. Uso ...
                            <a href="/paneldeclientes/administracion/index.php?rp=/announcements/24/IMPORTANTE-Wordpress-4.9.5-Actualizacion-de-Seguridad.html" class="label label-warning">Leer Más &raquo;</a>
                        </p>
                        <div class="article-items">
                            <i class="fas fa-calendar-alt fa-fw"></i>
                            4º Abr 2018
                        </div>
                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/24/IMPORTANTE-Wordpress-4.9.5-Actualizacion-de-Seguridad.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/24/IMPORTANTE-Wordpress-4.9.5-Actualizacion-de-Seguridad.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    </div>
                    <div class="announcement-single">
                        <a href="/paneldeclientes/administracion/index.php?rp=/announcements/23/IMPORTANTE-Wordpress-4.9.2-Actualizacion-de-Seguridad.html" class="title">
                            IMPORTANTE: Wordpress 4.9.2 Actualización de Seguridad
                        </a>
                        <p>
                            IMPORTANTE: Wordpress 4.9.2 Actualizaci&oacute;n de Seguridad.
                            El d&iacute;a 16 de Enero de 2018 se liber&oacute; una actualizaci&oacute;n de seguridad y mantenimiento de Wordpress. Esta actualizaci&oacute;n afecta a todas las versiones de Wordpress desde 3.7 a la fecha.
                            Se ha descubierto una vulnerabilidad XSS en los archivos Flash de ...
                            <a href="/paneldeclientes/administracion/index.php?rp=/announcements/23/IMPORTANTE-Wordpress-4.9.2-Actualizacion-de-Seguridad.html" class="label label-warning">Leer Más &raquo;</a>
                        </p>
                        <div class="article-items">
                            <i class="fas fa-calendar-alt fa-fw"></i>
                            30º Ene 2018
                        </div>
                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/23/IMPORTANTE-Wordpress-4.9.2-Actualizacion-de-Seguridad.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/23/IMPORTANTE-Wordpress-4.9.2-Actualizacion-de-Seguridad.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    </div>
                    <div class="announcement-single">
                        <a href="/paneldeclientes/administracion/index.php?rp=/announcements/22/IMPORTANTE-Joomla-3.8.4-Actualizacion-de-Seguridad-y-Mantenimiento.html" class="title">
                            IMPORTANTE: Joomla 3.8.4 Actualización de Seguridad y Mantenimiento
                        </a>
                        <p>
                            IMPORTANTE: Joomla 3.8.4 Actualizaci&oacute;n de Seguridad.El d&iacute;a de hoy,&nbsp;30 de Enero de 2018, ha sido liberada una actualizaci&oacute;n de seguridad para Joomla.
                            Esta versi&oacute;n, la 3.8.4 est&aacute; enfocada en 4 vulnerabilidades reportadas y en varios bugs que se han corregido. Las vulnerabilidades encontradas ...
                            <a href="/paneldeclientes/administracion/index.php?rp=/announcements/22/IMPORTANTE-Joomla-3.8.4-Actualizacion-de-Seguridad-y-Mantenimiento.html" class="label label-warning">Leer Más &raquo;</a>
                        </p>
                        <div class="article-items">
                            <i class="fas fa-calendar-alt fa-fw"></i>
                            30º Ene 2018
                        </div>
                        <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/22/IMPORTANTE-Joomla-3.8.4-Actualizacion-de-Seguridad-y-Mantenimiento.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                        <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="https://www.hospedando.com.mx/paneldeclientes/administracion/index.php?rp=/announcements/22/IMPORTANTE-Joomla-3.8.4-Actualizacion-de-Seguridad-y-Mantenimiento.html" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    </div>
                </div>
                <div class="col-md-3 pull-md-left sidebar sidebar-secondary">
                    <div menuItemName="Support" class="panel panel-sidebar panel-sidebar">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="far fa-life-ring"></i>&nbsp; Soporte
                                <i class="fas fa-chevron-up panel-minimise pull-right"></i>
                            </h3>
                        </div>
                        <div class="list-group">
                            <a menuItemName="Support Tickets" href="/paneldeclientes/administracion/supporttickets.php" class="list-group-item" id="Secondary_Sidebar-Support-Support_Tickets">
                                <i class="fas fa-ticket-alt fa-fw"></i>&nbsp; Mis Tickets de Soporte
                            </a>
                            <a menuItemName="Announcements" href="/paneldeclientes/administracion/index.php?rp=/announcements" class="list-group-item" id="Secondary_Sidebar-Support-Announcements">
                                <i class="fas fa-list fa-fw"></i>&nbsp; Noticias
                            </a>
                            <a menuItemName="Knowledgebase" href="/paneldeclientes/administracion/index.php?rp=/knowledgebase" class="list-group-item" id="Secondary_Sidebar-Support-Knowledgebase">
                                <i class="fas fa-info-circle fa-fw"></i>&nbsp; Preguntas Frecuentes
                            </a>
                            <a menuItemName="Downloads" href="/paneldeclientes/administracion/index.php?rp=/download" class="list-group-item" id="Secondary_Sidebar-Support-Downloads">
                                <i class="fas fa-download fa-fw"></i>&nbsp; Descargas
                            </a>
                            <a menuItemName="Network Status" href="/paneldeclientes/administracion/serverstatus.php" class="list-group-item" id="Secondary_Sidebar-Support-Network_Status">
                                <i class="fas fa-rocket fa-fw"></i>&nbsp; Avisos de Mantenimiento
                            </a>
                            <a menuItemName="Open Ticket" href="/paneldeclientes/administracion/submitticket.php" class="list-group-item" id="Secondary_Sidebar-Support-Open_Ticket">
                                <i class="fas fa-comments fa-fw"></i>&nbsp; Abrir Ticket
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
            <p>© 2006 - 2020 Hospedando.Com.Mx. Todos los Derechos Reservados.</p>
        </div>
    </section>
    <div id="fullpage-overlay" class="hidden">
        <div class="outer-wrapper">
            <div class="inner-wrapper">
                <img src="/paneldeclientes/administracion/assets/img/overlay-spinner.svg">
                <br>
                <span class="msg"></span>
            </div>
        </div>
    </div>
    <div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel-primary">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Cerrar</span>
                    </button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body panel-body">
                    Cargando...
                </div>
                <div class="modal-footer panel-footer">
                    <div class="pull-left loader">
                        <i class="fas fa-circle-notch fa-spin"></i>
                        Cargando...
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cerrar
                    </button>
                    <button type="button" class="btn btn-primary modal-submit">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <form action="#" id="frmGeneratePassword" class="form-horizontal">
        <div class="modal fade" id="modalGeneratePassword">
            <div class="modal-dialog">
                <div class="modal-content panel-primary">
                    <div class="modal-header panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">
                            Generar contraseña
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger hidden" id="generatePwLengthError">
                            Ingrese un número entre 8 y 64 para la longitud de la contraseña
                        </div>
                        <div class="form-group">
                            <label for="generatePwLength" class="col-sm-4 control-label">Longitud de la contraseña</label>
                            <div class="col-sm-8">
                                <input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="generatePwOutput" class="col-sm-4 control-label">Contraseña generada</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputGeneratePasswordOutput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-default btn-sm">
                                    <i class="fas fa-plus fa-fw"></i>
                                    Generar nueva contraseña
                                </button>
                                <button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
                                    <img src="/paneldeclientes/administracion/assets/img/clippy.svg" alt="Copy to clipboard" width="15">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cerrar
                        </button>
                        <button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
                            Copiar al portapapeles e insertar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="a18e019e1fe6685e3ebf7039-|49" defer=""></script>
</body>

</html>