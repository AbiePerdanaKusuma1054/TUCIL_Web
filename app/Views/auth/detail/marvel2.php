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
                        <a class="nav-link" href="/Auth/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/login">Log Out</a>
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
                    <img src="https://images-na.ssl-images-amazon.com/images/I/A1t8xCe9jwL._AC_SL1500_.jpg" class="card-img mt-4" width="200">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Avengers: Infinity War (2018)</h5>
                        <p class="card-text">Avengers: Infinity War is a 2018 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the sequel to The Avengers (2012) and Avengers: Age of Ultron (2015), and the 19th film in the Marvel Cinematic Universe (MCU). Directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, the film features an ensemble cast including Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Scarlett Johansson, Benedict Cumberbatch, Don Cheadle, Tom Holland, Chadwick Boseman, Paul Bettany, Elizabeth Olsen, Anthony Mackie, Sebastian Stan, Danai Gurira, Letitia Wright, Dave Bautista, Zoe Saldana, Josh Brolin, and Chris Pratt. In the film, the Avengers and the Guardians of the Galaxy attempt to prevent Thanos from collecting the six all-powerful Infinity Stones as part of his quest to kill half of all life in the universe.</p>
                        <p class="card-text"><small class="text-muted"><b>Release Date :</b> 23 April 2018</small></p>
                        <p class="card-text"><small class="text-muted"><b>Director :</b> Anthony Russo & Joe Russo</small></p>
                        <a href="http://149.56.24.226/avengers-infinity-war-2018/" class="btn btn-success">Watch Now</a>
                        <a href="/auth/index" class="btn btn-secondary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>