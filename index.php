<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>Hello CS313 World!</title>
   
   <!-- Bootstrap CSS -->
   <link href="/php/css/bootstrap.min.css" rel="stylesheet" />
   
   
   

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Travis Baker</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if ($_SERVER['PHP_SELF'] == "/php/index.php") { echo "class='active'"; } ?> ><a href="/php/index.php">Home</a></li>
        <li <?php if ($_SERVER['PHP_SELF'] == "/php/assignments/index.php") { echo "class='active'"; } ?> ><a href="/php/assignments/index.php">Assignments</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<section class='container'>
    <hgroup>
      <h1>Hello World</h1>
    </hgroup>


        <div class="row">
          <section class="col-xs-12">
            <section>
              <h2>Hello CS313 People</h2>
                <p>This is my home page.</p>
            </section>

          </section>
</section>

   <!-- jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <!-- Bootstrap JavaScript (including jQuery plugins -->
   <script src="/php/js/bootstrap.min.js"></script>

</body>
</html>
