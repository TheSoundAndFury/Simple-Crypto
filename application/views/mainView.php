
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple-Crypto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">Simple Crypto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Simple Crypto</h1>
            <p class="lead">Curent Top 10 Cryto-Currency Listings.</p>
            <ul class="list-unstyled">

                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Price</th>
                    </tr>
                    </thead>

                <?php
               // echo "<pre>";
               //print_r($data);
                $iZero = array_values($data);
                for($i = 0; $i < 10; $i++){
                    echo "<tr><td>". $iZero[$i]['rank']."</td>";
                    echo "<td>".  $iZero[$i]['name']."</td>";
                    echo "<td>".  $iZero[$i]['symbol']."</td>";
                    echo "<td>". "$" . number_format($iZero[$i]['quotes']['USD']['price'],2)."</td></tr>";
                }

                ?>
                </table>

            </ul>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
