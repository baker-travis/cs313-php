<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello CS313 World!</title>

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" />

    <link href="/css/common.css" rel="stylesheet" />


</head>

<body>
    <?php include $_SERVER[ 'DOCUMENT_ROOT']. '/templates/menu.php'; ?>

    <section class='container'>
        <hgroup>
            <h1>So Who Is Travis Baker?</h1>
        </hgroup>

        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#me" role="tab" data-toggle="tab">About Me</a>
            </li>
            <li><a href="#family" role="tab" data-toggle="tab">Family</a>
            </li>
            <li><a href="#experience" role="tab" data-toggle="tab">Technical Experience</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="me">
                <p>
                    My name is Travis Baker. I am a junior on campus at BYU-Idaho. I have lived in 17 different places, including 6 different places on my mission. I served in the New Hampshire Manchester Mission from October 2010 - October 2012. I have also lived in many difference places between Oklahoma and Texas, as well as 3 years in <a href="http://en.wikipedia.org/wiki/Dubai">Dubai, U.A.E.</a> I enjoy playing basketball in my free time. I also like watching sports. This past summer, I had the opportunity to go to a <a href="http://www.nba.com/spurs/">San Antonio Spurs</a> NBA Finals game, and it was the experience of a lifetime.
                </p>
                <div id="san-antonio-pictures" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#san-antonio-pictures" data-slide-to="0" class="active"></li>
                        <li data-target="#san-antonio-pictures" data-slide-to="1"></li>
                        <li data-target="#san-antonio-pictures" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/Mission-Elder-Murray.JPG" alt="My companion Elder Murray">
                            <div class="carousel-caption">
                                <h3>New Hampshire Manchester Mission</h3>
                                <p class="hidden-xs">This is my companion Elder Murray. He was the only missionary I got to train.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/Spurs-Finals.JPG" alt="San Antonio Spurs Finals game">
                            <div class="carousel-caption">
                                <h3>Spurs Finals Game 1</h3>
                                <p class="hidden-xs">This is from the 2014 NBA Finals. The San Antonio Spurs won in 5 games.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/Texans-Draft-Party.JPG" alt="Me and my dad at the Houston Texans draft party">
                            <div class="carousel-caption">
                                <h3>Texans Draft Party</h3>
                                <p class="hidden-xs">My Dad and I got to attend the draft party the Houston Texans held. The Houston Texans, with the #1 overall draft pick in the NFL, chose Jadeveon Clowney.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#san-antonio-pictures" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#san-antonio-pictures" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="family">
                <p>
                    My wife and I were married on June 15, 2013. We went on our honeymoon to San Anotnio, TX and stayed on the riverwalk. It was such a fun time! My wife is also from Houston, TX, which makes it nice for vacations when we go home. We have a child on the way. His name (yes it is a boy!) is Wesley Austin Baker. He will be born in February, 2015. My wife and I enjoy a good many things, but we really like movies. The Marvel movies are of a particular interest to us. We were sealed in the Houston, TX temple.
                </p>
                <div id="family-pictures" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#family-pictures" data-slide-to="0" class="active"></li>
                        <li data-target="#family-pictures" data-slide-to="1"></li>
                        <li data-target="#family-pictures" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/Engagement%20Pics.jpg" alt="One of our engagement pictures.">
                            <div class="carousel-caption">
                                <h3>Engagement Picture</h3>
                                <p class="hidden-xs">We got engaged in Rexburg, ID and took our pictures at a spot just North of campus.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/Roatan.JPG" alt="My wife and I with a monkey.">
                            <div class="carousel-caption">
                                <h3>Roatan, Honduras</h3>
                                <p class="hidden-xs">My wife and I went on a cruise, and we went to a place where we got to hold monkeys!</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/Blake%20Shelton.JPG" alt="At a Blake Shelton Concert">
                            <div class="carousel-caption">
                                <h3>Blake Shelton</h3>
                                <p class="hidden-xs">My wife and I went to see a concert starring Blake Shelton with performances from The Band Perry, Neal McCoy, and Dan and Shay.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#family-pictures" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#family-pictures" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="tab-pane" id="experience">
                <p>
                    I am a Computer Engineering major. My time at BYU-Idaho has given me experience, but I feel like the most experience has come from the work I have done. I work as a web developer on campus for the BYU-Idaho Support Center. I have done some major projects that have allowed me to learn new things. I have also interned at <a href="https://www.usaa.com">USAA</a> in San Antonio, TX. I was a Java developer there, and mostly worked on web applications.
                </p>
            </div>
        </div>

    </section>
    <footer class="footer text-center">
        <section class="container">
            <p class="text-muted">
                &copy; 2014 Travis Baker
            </p>
        </section>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript (including jQuery plugins -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>
