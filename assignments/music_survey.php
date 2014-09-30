<?php 
session_start();

if(isset($_SESSION["views"])) {
    ++$_SESSION["views"];
} else {
    $_SESSION["views"] = 1;
}

?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Music Survey</title>

    <!-- Bootstrap CSS -->

    <link href="/css/bootstrap.css" rel="stylesheet" />

    <link href="/css/common.css" rel="stylesheet" />

</head>
<body>
    <?php include $_SERVER[ 'DOCUMENT_ROOT']. '/templates/menu.php'; ?>
    
    <section class="container">
        <hgroup>
            <h1>What's your flavor?</h1>
        </hgroup>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            
        </form>
        
        
        <p>You have viewed this page <?php echo $_SESSION["views"] ?> time<?php if ($_SESSION["views"] > 1) echo "s"; ?></p>
        <!-- A session is available as long as the browser instance has not closed. -->
        
        
    </section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap JavaScript (including jQuery plugins -->
    <script src="/js/bootstrap.min.js"></script>
    <script>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $_SESSION["submitted"] = true;
            }

            if($_SERVER["REQUEST_METHOD"] == "POST" || (isset($_SESSION["submitted"]) && $_SESSION["submitted"] = true)) {
                //Open the modal
            }
        ?>
    </script>
</body>