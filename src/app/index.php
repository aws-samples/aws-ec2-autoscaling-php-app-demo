<?php
session_start();
if (isset($_SESSION['user'])) {
    header("location:welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--TITLE-->
    <meta charset="utf-8" />
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAhDFQAPaq+AC0lvEA+sf5AC//AAAWrv8AlXyWAFAhTgBUJFYAy4vNAFUsaQDBf8YATO/8AFni/wDNjdAAt3q8APuy+wBi5vwA+dX8ADw0hgCb/P4AxXnHAFgEHABwKncAdDRjAG0idQDL5P4A/73+AEMqvADdluEAunW7AH8vggDWi9cAm1edAMWDxQCTVpgA7KDuAKJapQBA3v0AAIz/AP7+/gBUo/0A0InNACQe2AD+uP0AWh1cAFMtYQCubbIAtp2vAP3e/gD+3v4ALn78AC8u/gDy8fMA76XyAJ5lqQD/2/8AQBJtAGz+/gD7tvwA9s/4ADsIJgDKic8A57XnAH0tggB1IngAgjSHAOqf6wD8uP8AZx1uAFcWWQDlnekApWKqAP6+/wDonekAAAD/AO6g8QB2KnsAsWG1AJdLmQCLaIoA+s/5ALJztADQkNUAqpOtAPzH/wCpbrIAdE10APet9gBZHzAAu266AP///wCMQY0Aey6BAKpwrQC/5/sAqPX+AHAmdwCsYa4AlVSaAP8AJgB4L38A+Kn6ALl4wABc6PUARBkJALdzvgA0MNsAgzWHADrW+AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEYaAAAAAAAAAAAAAAAAAEckZgAAAAAAAAAAAAAAAAAASCUAAAAAAAAAAAAAAAAAAF9ZUEIHXE5iZAkAAAAAAAAAI0tdQ1VjZxguAAAAAGwAACY8SRBTFkQfIgAAAGoFOgAhVhFFShNtIE8AAAAAMT4ATUwyOQQCa15XAAAAAG5lGSsDPVIzLQwAAAAAAAsnBWUFTFoXQDcwAAAAAAAUKDsVYEwBZQoPQQgAAAAAAAYOYSplZWU/HhxUAAAAAAA2LDUdAAUFDwBcUQAAAAAAAAAAAAANOGhcWwAAAAAAAAAAAAAANBIbTGkAAAAAAAAAAAAAAABYTEwpLwAAAPP/AADj/wAA8/8AAPADAAD4AwAA2AMAAIgDAADIAwAAwA8AAIAPAACABwAAwAcAAMIHAAD+DwAA/g8AAP8HAAA=" rel="icon" type="image/x-icon" />
    <title>
        AWS Demo HUB
    </title>
    <!--STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--SCRIPT-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In<h5>
                                <form class="form-signin" method="POST" action="login.php">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
                                        <label for="inputEmail">Email address</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                                        <label for="inputPassword">Password</label>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" name="login" type="submit">Sign
                                        in</button>
                                    <hr class="my-4">
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>