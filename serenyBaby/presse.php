<?php include '../inc/hautSereny.inc.php';?>
<?php include '../inc/navGenerale.inc.php';?>
<?php include '../inc/headerBaby.inc.php';?>

<title> Presse </title>
</head>

<body>

    <?php include '../inc/navBaby.inc.php';?>

    <main>
        <div class="my-3 d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
                <ol class="carousel-indicators text-primary">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/Presse01.jpg" class="d-block w-100" alt="Article de presse">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/presse02.jpg" class="d-block w-100" alt="Article de presse">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <iframe src="https://tetardetnenuphar.com/blog/bertille-signe-avec-b%C3%A9b%C3%A9-interview"
                title="Article tetard nenuphar" width="800" height="800">
        </div>
    </main>

    <?php include '../inc/footerBaby.inc.php';?>