<?php include "inc/html-top.inc";?>


<head>

    <?php include "inc/head.inc";?>
    <title>Home | Boston | Assignment 04</title>

</head>


<body>
<div class="container">
    <h1>Team Boston Assignment 04 Homepage</h1>

    <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-dark bg-dark">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="amanda.php">Amanda</a></li>
                <li class="nav-item"><a class="nav-link" href="jacob.php">Jacob</a></li>
                <li class="nav-item"><a class="nav-link" href="joseph.php">Joseph</a></li>
            </ul>

        </nav>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="card col-md-auto mr-4">
        <a href="amanda.php">
            <img class="card-img-top" src="images/amanda.jpg" alt="Amanda">
            <div class="card-body">
                <h2 class="card-title">Amanda O'Donnell</h2>
                <p class="card-subtitle mb-2 text-muted">BCS and Psychology Minors '19.</p>
            </div>
        </a>
    </div>
    <div class="card col-md-auto">
        <a href="jacob.php">
            <img src="images/wonkuk-headshot.jpg" alt="Won Kuk">
            <div class="card-body">
                <h2 class="card-title">Won Kuk Lee</h2>
                <p class="card-subtitle mb-2 text-muted">Computer Science '19.</p>
            </div>
        </a>
    </div>
    <div class="card col-md-auto ml-4">
        <a href="joseph.php">
            <img src="images/jhur.jpg" alt="Joseph">
            <div class="card-body">
                <h2 class="card-title">Joseph Hur</h2>
                <p class="card-subtitle mb-2 text-muted">CS and Anthropology '19.</p>
            </div>
        </a>
    </div>
</div>

<?php include "inc/footer.inc";?>
<?php include "inc/scripts.inc";?>

</body>
</html>
