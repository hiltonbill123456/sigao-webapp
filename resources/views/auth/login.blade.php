<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="login">
        <div class="body">
            <div class="portada">
                <div class="img" style="background-image: url({{asset('storage').'/'.'uploads/login/portada.jpg'}});"></div>
            </div>
            <div class="space">
                <div class="pad_logo">
                    <img src="{{asset('storage').'/'.'uploads/login/somoPucuLargo.svg'}}" >
                </div>
                <div class="space__form">


                    <h1>Iniciar Sesion</h1>
                    <span >Inicie sesión para continuar en nuestro sitio web</span>

                    <form method="POST" action="{{ route('login') }}" class="mt-4">
                        @csrf

                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="email">
                            <label for="floatingInput">Correo o nombre de usuario</label>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="pad_button">
                            <button type="submit" class=" mb-4">Iniciar Sesion</button>
                        </div>


                    </form>
                </div>

                <div class="space__information">
                    <div class="siguenos">
                        <div class="linea"></div>
                        <div class="paragraph">
                            <p>Siguenos en</p>
                        </div>
                        <div class="linea"></div>
                    </div>

                    <div class="social-media">
                        <a href="https://www.facebook.com/" target="_blank">
                            <div class="icon" style="background-image: url({{asset('storage').'/'.'uploads/login/facebook_icono.svg'}});"></div>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                            <div class="icon" style="background-image: url({{asset('storage').'/'.'uploads/login/instagram_icono.svg'}});"></div>
                        </a>
                        <a href="https://www.tiktok.com/es/" target="_blank" rel="noopener noreferrer">
                            <div class="icon" style="background-image: url({{asset('storage').'/'.'uploads/login/tiktok_icono.svg'}});"></div>
                        </a>
                        <a href="https://twitter.com/?lang=es" target="_blank" rel="noopener noreferrer">
                            <div class="icon" style="background-image: url({{asset('storage').'/'.'uploads/login/twiter_icono.svg'}});"></div>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
                            <div class="icon" style="background-image: url({{asset('storage').'/'.'uploads/login/youtube_icono.svg'}});"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </section>


    @vite(['resources/scss/user/main-user.scss'])
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
