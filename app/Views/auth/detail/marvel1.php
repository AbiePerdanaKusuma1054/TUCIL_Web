<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">M O V I E S .C O M</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container text-center">
            <img src="/img/lavengers.png" width="400">
        </div>
    </div>
    <div class="container">
        <h1>Marvel Avengers</h1>
    </div>
    <div class="container mt-5">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/719S7I-%2ByBL._AC_SL1023_.jpg" class="card-img mt-4" width="200">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Avengers: Age of Ultron (2015)</h5>
                        <p class="card-text">Avengers: Age of Ultron is a 2015 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the sequel to The Avengers and the 11th film in the Marvel Cinematic Universe. Written and directed by Joss Whedon, the film features an ensemble cast including Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Jeremy Renner, Don Cheadle, Aaron Taylor-Johnson, Elizabeth Olsen, Paul Bettany, Cobie Smulders, Anthony Mackie, Hayley Atwell, Idris Elba, Stellan Skarsgård, James Spader, and Samuel L. Jackson. In the film, the Avengers fight Ultron, an artificial intelligence obsessed with causing human extinction.</p>
                        <p class="card-text"><small class="text-muted"><b>Release Date :</b> 1 May 2015</small></p>
                        <p class="card-text"><small class="text-muted"><b>Director :</b> Joss Whedon</small></p>
                        <a href="http://149.56.24.226/avengers-age-of-ultron-2015/" class="btn btn-success">Watch Now</a>
                        <a href="/" class="btn btn-secondary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>