<!--Static variables-->
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>

<!DOCTYPE html>
<html>

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

                        <!--SESSION-->
                        <?php
                        session_start();
                        if (isset($_SESSION['user'])) {
                            echo '<h4 style="font-family:verdana;">Welcome ' . $_SESSION['user'] . '!</h4>';
                            echo '<br/><a class="btn btn-lg btn-primary btn-block text-uppercase" href="stress.php?stress">stress</a>';
                            echo '<br/><a class="btn btn-lg btn-primary btn-block text-uppercase" href="logout.php?logout">logout</a>';
                        } else {
                            header("location:index.php");
                        }
                        ?>

                        <p style="font-family:verdana;font-size:130%;color:black">
                            <?php
                            echo "<br/>This machine is: ";
                            echo gethostname();
                            ?>
                        </p>

                        <!--Get instance metadata-->
                        <?php
                        $EC2_AZ = `curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone`;
                        if ($EC2_AZ == 'us-east-1a') $COLOR = "blue";
                        if ($EC2_AZ == 'us-east-1b') $COLOR = "green";
                        echo '<p style="font-family:verdana;font-size:180%;color:' . $COLOR . '">' . $EC2_AZ;
                        ?>

                        <?php
                        $time = microtime();
                        $time = explode(' ', $time);
                        $time = $time[1] + $time[0];
                        $finish = $time;
                        $total_time = round(($finish - $start), 4);
                        echo '<p style="font-family:verdana;font-size:90%;color:black">';
                        echo 'Page generated in ' . $total_time . ' seconds.';
                        echo '</p>';
                        ?>
                    </div>
                    <img src="image/unicorn.png" width="250" height="250" class="img-unicorn"/>
                </div>
            </div>
        </div>
    </div>
</body>

</html>