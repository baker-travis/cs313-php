<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Music Survey</title>

    <!-- Bootstrap CSS -->

    <link href="/css/bootstrap.css" rel="stylesheet" />

    <link href="/css/common.css" rel="stylesheet" />

</head>

<body>
    <?php 
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php'; 
    ?>

    <section class="container">
        <hgroup>
            <h1>What's your flavor?</h1>
        </hgroup>

        <div class="panel panel-default">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p>How do you usually listen to music?</p>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="how" id="phone" value="phone" checked>Phone/MP3 Player
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="how" id="radio" value="radio">Radio
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="how" id="cd" value="cd">CD
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="how" id="stream" value="stream">Streaming
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p>How often listen to music?</p>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="frequency" id="1" value="1" checked> &lt; 1 hour a day
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="frequency" id="1-3" value="1-3"> 1-3 hours a day
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="frequency" id="3-6" value="3-6"> 3-6 hours a day
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="frequency" id="6" value="6"> &gt; 6 hours a day
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p>What is your favorite genre?</p>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="genre" value="rock" checked> Rock
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="genre" value="r-b"> R&amp;B
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="genre" value="rap"> Rap
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="genre" value="country"> Country
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="genre" value="pop"> Pop
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="genre" value="other"> Other
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <p>Do you listen to music at work?</p>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="work" value="yes" checked> Yes
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="work" value="no"> No
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="panel-footer">
                    <button class="btn btn-primary btn-lg" type="submit" id="submit">Submit</button>
                    <!-- Button trigger modal -->
                    <a class="btn btn-default btn-lg pull-right" data-toggle="modal" data-target="#myModal">
                        View Results
                    </a>
                    <span class="clearfix"></span>
                </div>
            </form>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Survey Results</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript (including jQuery plugins) -->
    <script src="/js/bootstrap.min.js"></script>
    <?php

    if (PHP_OS == "Darwin") {
        $dbAddress = "127.0.0.1";

        $con = mysqli_connect($dbAddress, "root", "root", "", 8889);
    } else {
        $dbAddress = getenv("OPENSHIFT_MYSQL_DB_HOST");

        $con = mysqli_connect($dbAddress, "adminInvFdrC", "sjZeqA_SaiIa");
    }

    $createDBSql = "CREATE DATABASE IF NOT EXISTS Survey";

    if (mysqli_query($con, $createDBSql)) {
        echo "<script>console.log('" . "Database Created" . "');</script>";
    } else {
        echo "<script>console.log('Error: " . mysqli_error($con) . "');</script>";
    }

    if (mysqli_connect_errno()) {
        echo "<script>console.log(\"Failed to connect to MySQL: " . mysqli_connect_error() . "\");</script>";
    }

    mysqli_select_db($con, "Survey");

    $createResultsSql = "CREATE TABLE IF NOT EXISTS Results
    (
    Medium VARCHAR(35),
    Frequency VARCHAR(35),
    Genre VARCHAR(35),
    Work BOOL
    )";

    if (!mysqli_query($con, $createResultsSql)) {
        echo "<script>console.log(\"Could not create table.\")";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_SESSION["submitted"]) || $_SESSION["submitted"] != true)) {
        $_SESSION['submitted'] = true;
        
        $medium = mysqli_real_escape_string($con, $_POST["how"]);
        $frequency = mysqli_real_escape_string($con, $_POST["frequency"]);
        $genre = mysqli_real_escape_string($con, $_POST["genre"]);
        $workWord = mysqli_real_escape_string($con, $_POST["work"]);
        if ($workWord == "yes") {
            $work = "1";
        } else {
            $work = "0";
        }
        
        $insertSql = "INSERT INTO Results 
        VALUES ('$medium', '$frequency', '$genre', $work)";
        
        if (!mysqli_query($con, $insertSql)) {
            echo "<script>console.log(\"Could not add entry: " . mysqli_error($con) . "\")</script>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" || (isset($_SESSION["submitted"]) && $_SESSION["submitted"] == true)) {
        //Get Data from the server.
        echo "<script>$(\"#myModal\").modal(); $('#submit').prop('disabled', true);</script>";
    } 
    ?>
</body>
</html>