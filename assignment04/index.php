<?php include "inc/html-top.inc";?>


<head>

    <?php include "inc/head.inc";?>
    <title>Home | Boston | Assignment 04</title>

</head>


<body>
<div class="container">
    <h1 class="">Team Boston Assignment 04 Homepage</h1>

    <div class="container">
        <nav class="menu navbar navbar-expand-lg navbar-dark bg-dark mb-4 mt-3 shadow rounded">

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
    <div class="card  mx-0 shadow p-3 mb-5 bg-white rounded">
        <a href="amanda.php">
            <img class="rounded" src="images/amanda.jpg" alt="Amanda">
        </a>
            <div class="card-body">
                <h2 class="card-title name">Amanda O'Donnell</h2>
                <div class="card-subtitle mb-2 text-muted">BCS and Psychology Minors '19.</div>
            </div>
        </a>
    </div>
    <div class="card mx-2 shadow p-3 mb-5 bg-white rounded">
        <a href="jacob.php">
            <img class="rounded" src="images/wonkuk-headshot.jpg" alt="Won Kuk">
        </a>
            <div class="card-body">
                <h2 class="card-title name text-weight-bolder">Won Kuk Lee</h2>
                <div class="card-subtitle mb-2 text-muted">Computer Science '19.</div>
            </div>

    </div>
    <div class="card mx-0 shadow p-3 mb-5 bg-white rounded">
        <a href="joseph.php">
            <img class="rounded" src="images/jhur.jpg" alt="Joseph">
        </a>
            <div class="card-body">
                <h2 class="card-title name">Joseph Hur</h2>
                <div class="card-subtitle mb-2 text-muted">CS and Anthropology '19.</div>
            </div>

    </div>
</div>

<?php include "inc/footer.inc";?>
<?php include "inc/scripts.inc";?>

</body>
</html>
