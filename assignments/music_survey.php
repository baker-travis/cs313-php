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
                        <p>How often do you listen to music?</p>
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
                        <p>How do you usually listen to music?</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" id="phonePart" style="width: 0%">
                                <span>Phone/MP3</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" id="radioPart" style="width: 0%">
                                <span>Radio</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" id="cdPart" style="width: 0%">
                                <span>CD</span>
                            </div>
                            <div class="progress-bar progress-bar-info" id="streamPart" style="width: 0%">
                                <span>Stream</span>
                            </div>
                        </div>
                        <p>How often do you listen to music (in hours)?</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" id="onePart" style="width: 0%">
                                <span>&lt; 1</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" id="one2threePart" style="width: 0%">
                                <span>1-3</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" id="three2sixPart" style="width: 0%">
                                <span>3-6</span>
                            </div>
                            <div class="progress-bar progress-bar-info" id="sixPart" style="width: 0%">
                                <span>&gt; 6</span>
                            </div>
                        </div>
                        <p>What is your favorite genre?</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" id="rockPart" style="width: 0%">
                                <span>Rock</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" id="rAndBPart" style="width: 0%">
                                <span>R&amp;B</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" id="rapPart" style="width: 0%">
                                <span>Rap</span>
                            </div>
                            <div class="progress-bar progress-bar-info" id="countryPart" style="width: 0%">
                                <span>Country</span>
                            </div>
                            <div class="progress-bar progress-bar-primary" id="popPart" style="width: 0%">
                                <span>Pop</span>
                            </div>
                            <div class="progress-bar progress-bar-success progress-bar-striped" id="otherPart" style="width: 0%">
                                <span>Other</span>
                            </div>
                        </div>
                        <p>Do you listen to music at work?</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" id="yesPart" style="width: 0%">
                                <span>Yes</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" id="noPart" style="width: 0%">
                                <span>No</span>
                            </div>
                        </div>
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
    /* This portion is to get the percentages for the medium */
    $phone = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Medium = 'phone'"))['num'];
    $radio = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Medium = 'radio'"))['num'];
    $cd = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Medium = 'cd'"))['num'];
    $stream = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Medium = 'stream'"))['num'];

    $totalMedium = $phone + $radio + $cd + $stream;

    $phonePart = round($phone / $totalMedium * 100);
    $radioPart = round($radio / $totalMedium * 100);
    $cdPart = round($cd / $totalMedium * 100);
    $streamPart = round($stream / $totalMedium * 100);

    $totalMediumPerc = $phonePart + $radioPart + $cdPart + $streamPart;

    if ($totalMediumPerc > 100) {
        $toTrim = $totalMediumPerc - 100;
        
        $streamPart -= $toTrim;
    }

    echo "<script>
        $('#phonePart').css('width', '$phonePart%');
        $('#radioPart').css('width', '$radioPart%');
        $('#cdPart').css('width', '$cdPart%');
        $('#streamPart').css('width', '$streamPart%');;
    </script>";

    /* This portion is to get the percentages for the frequency */
    $one = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Frequency = '1'"))['num'];
    $one2three = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Frequency = '1-3'"))['num'];
    $three2six = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Frequency = '3-6'"))['num'];
    $six = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Frequency = '6'"))['num'];

    $totalFrequency = $one + $one2three + $three2six + $six;

    $onePart = round($one / $totalFrequency * 100);
    $one2threePart = round($one2three / $totalFrequency * 100);
    $three2sixPart = round($three2six / $totalFrequency * 100);
    $sixPart = round($six / $totalFrequency * 100);

    $totalFrequencyPerc = $onePart + $one2threePart + $three2sixPart + $sixPart;

    if ($totalFrequencyPerc > 100) {
        $toTrim = $totalFrequencyPerc - 100;
        
        $sixPart -= $toTrim;
    }

    echo "<script>
        $('#onePart').css('width', '$onePart%');
        $('#one2threePart').css('width', '$one2threePart%');
        $('#three2sixPart').css('width', '$three2sixPart%');
        $('#sixPart').css('width', '$sixPart%');;
    </script>";

    /* This portion is to get the percentages for genre */
    $rock = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Genre = 'rock'"))['num'];
    $rAndB = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Genre = 'r-b'"))['num'];
    $rap = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Genre = 'rap'"))['num'];
    $country = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Genre = 'country'"))['num'];
    $pop = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Genre = 'pop'"))['num'];
    $other = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Genre = 'other'"))['num'];

    $totalGenre = $rock + $rAndB + $rap + $country + $pop + $other;

    $rockPart = round($rock / $totalGenre * 100);
    $rAndBPart = round($rAndB / $totalGenre * 100);
    $rapPart = round($rap / $totalGenre * 100);
    $countryPart = round($country / $totalGenre * 100);
    $popPart = round($pop / $totalGenre * 100);
    $otherPart = round($other / $totalGenre * 100);

    $totalGenrePerc = $rockPart + $rAndBPart + $rapPart + $countryPart + $popPart + $otherPart;

    if ($totalGenrePerc > 100) {
        $toTrim = $totalGenrePerc - 100;
        $otherPart -= $toTrim;
    }

    echo "<script>
        $('#rockPart').css('width', '$rockPart%');
        $('#rAndBPart').css('width', '$rAndBPart%');
        $('#rapPart').css('width', '$rapPart%');
        $('#countryPart').css('width', '$countryPart%');
        $('#popPart').css('width', '$popPart%');
        $('#otherPart').css('width', '$otherPart%');
    </script>";

    /* This portion is to get percentages for work */

    $yes = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Work = '1'"))['num'];
    $no = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS num FROM Results WHERE Work = '0'"))['num'];
    
    $totalWork = $yes + $no;

    $yesPart = round($yes / $totalWork * 100);
    $noPart = round($no / $totalWork * 100);

    $totalWorkPerc = $yesPart + $noPart;

    if ($totalWorkPerc > 100) {
        $toTrim = $totalWorkPerc - 100;
        
        $noPart -= $toTrim;
    }

    echo "<script>
        $('#yesPart').css('width', '$yesPart%');
        $('#noPart').css('width', '$noPart%');
    </script>";

    if ($_SERVER["REQUEST_METHOD"] == "POST" || (isset($_SESSION["submitted"]) && $_SESSION["submitted"] == true)) {
        echo "<script>$(\"#myModal\").modal(); $('#submit').prop('disabled', true);</script>";
    } 
    ?>
</body>
</html>