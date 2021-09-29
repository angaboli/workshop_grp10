<?php

require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover · Workshop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



    <!-- Bootstrap core CSS -->
    <link href="../code/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Workshop</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a> -->
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Workshop EPSI</h1>
            <p class="lead">Bienvenue sur le site de conseil en cybersécurité</p>
            <p class="lead">
                <a href="main.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Cliquer ici pour en savoir plus</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        </footer>
    </div>



</body>

</html>