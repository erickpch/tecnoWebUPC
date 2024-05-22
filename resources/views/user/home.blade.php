<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <h2>USER LOGIN</h2>
            </div>
            <div class="avatar">
                <img src="{{asset('imagenes/logo.png')}}" alt="Logo">
            </div>


            <form action="{{route('login')}}" method="POST">
                @csrf

                <div class="input-group">
                    <label for="username">Correo</label>
                    <input type="email" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                @if(session('error'))
                  <div style="color: red; background-color: coral">   {{session('error')}}</div>
                @endif

                <button type="submit">iniciar sesion</button>
            </form>


        </div>
    </div>
</body>
</html>
