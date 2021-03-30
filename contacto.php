<!DOCTYPE html>
<html lang="en">

<head><meta charset="gb18030">

    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nisa Delgado</title>
    
    <link rel="icon" type="image/png" href="/img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/node_modules/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu 
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/portafolio">Portafolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-color: black">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Contacto</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Nombre</label><input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Ingrese su nombre.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="Correo electrónico" id="email" required data-validation-required-message="Ingrese su correo electrónico.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Asunto</label>
                            <input type="text" class="form-control" placeholder="Asunto" id="subject" required data-validation-required-message="Ingrese un asunto.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Ingrese un mensaje."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <br>

                    <div id="success"></div>

                    <div class="form-group">
                        <button style="border-color: black; background-color: black" type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a target="_blank" href="https://twitter.com/Nisa6Delgado">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a target="_blank" href="https://instagram.com/nisa6delgado">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a target="_blank" href="https://github.com/nisa6delgado">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a target="_blank" href="https://www.youtube.com/channel/UCTgu94owdYN98yBZQnW0ihA">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

                    <p class="copyright text-muted">Todos los derechos reservados &copy; Nisa Delgado 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="webhost">

    <!-- Bootstrap core JavaScript -->
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/main.js"></script>

</body>

</html>
