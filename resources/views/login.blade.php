<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SweetSpot</title>
    <link rel='stylesheet' href="{{asset('css/commonstyle/common.css')}}" />
    <link rel='stylesheet' href="{{asset('css/loginView.css')}}" />
</head>

<body>
    @include("common.header")
    <div class="mainbody">
        <div class="MainLogin">
            <div class="loginForm">
                <h3>Login</h3>
                <form action='http://localhost/sweetspot/public/admin'>
                    <input placeholder="Username">
                    <input placeholder="Password">
                    <input class='subBTN' type="submit" name="Login">
                </form>
                <label>Sample Username: Admin Password: Admin</label>
            </div>
        </div>
    </div>
</body>

</html>