<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>FindThePrecious</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ftp.css">
</head>

<body>
<!-- Navigation bar -->
<header>



    <nav class="navbar navbar-expand-lg navbar-light Navigation_bar">
        <img src="Images/logo.png" alt="LogoFTP" class="navbar-brand">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link Fellows" href="#">Fellows |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">The Ring |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Get my reward |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Best hunters |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Join the army |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>


</header>
<!-- End Navigation Bar -->

<div class="blocMyprecious">
    <div class="anneauType1">
    </div>
    <p>My precious</p>
    <div class="anneauType1">
    </div>
</div>

<div class="blocTheonering">
    <div class="anneauType2">
    </div>
    <p>The one ring</p>
</div>


<div class="blockAnneaux">
    <?php
    for ($numeroCercle = 1; $numeroCercle <= 6; $numeroCercle++){ ?>
        <div class="anneauType3_<?= $numeroCercle ?>">
        </div>
    <?php } ?>
</div>


<p class="thirdText">Please find it !</p>


<footer class="page-footer font-small indigo">
    <div class="container text-center text-md-left background_footer">
        <div class="row blocLinkFooter">
            <div class="col-md-4 mx-auto">
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text_link1">About us</a>
                    </li>
                    <li>
                        <a href="#!" class="text_link1">Fellows</a>
                    </li>
                    <li>
                        <a href="#!" class="text_link1">Join our army</a>
                    </li>
                </ul>
            </div>

            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 mx-auto">
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text_link1">FAQ</a>
                    </li>
                    <li>
                        <a href="#!" class="text_link1">Reward conditions</a>
                    </li>
                    <li>
                        <a href="#!" class="text_link1">Legal mentions</a>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 mx-auto">
                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text_link2">Sauron4ever.com</a>
                    </li>
                    <li>
                        <a href="#!" class="text_link2">Follow him also on twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>