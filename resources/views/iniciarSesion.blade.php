<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <title>Document</title>
    </head>
    <body>
    <header>
        <a href="#"><img src="img/CTECCompleto.png" alt="CTEC logo."></a>
    </header>
    <main>
        <div class="valign-wrapper row login-box center-align">
            <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
                <form action="{{route('iniciarSesion')}}" method="post" enctype="multipart/form-data">
                    <div class="card-content">
                        <span class="card-title">CTEC Evaluation System | Inicio de Sesión</span>
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="nombre_usuario">Ingrese su nombre de usuario.</label>
                                <input type="text" class="validate" name="nombre_usuario" id="userName" />
                            </div>
                            <div class="input-field col s12">
                                <label for="contraseña">Ingrese su contraseña.</label>
                                <input type="password" class="validate" name="contraseña" id="password" />
                            </div>
                        </div>
                    </div>
                    <div class="card-action center-align">
                        <input type="submit" class="btn blue waves-effect waves-light" value="Iniciar Sesión">
                    </div>
                </form>
            </div>
        </div>
    </main>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</html>