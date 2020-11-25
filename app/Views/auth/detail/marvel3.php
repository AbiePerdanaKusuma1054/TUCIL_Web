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
                    <img src="https://i.redd.it/q2y77v0177v21.png" class="card-img mt-4" width="200">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Avengers: Endgame (2019)</h5>
                        <p class="card-text">Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. It is the direct sequel to Avengers: Infinity War and the 22nd film in the Marvel Cinematic Universe. Directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, the film features an ensemble cast including Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse the damage caused by Thanos in Infinity War.</p>
                        <p class="card-text"><small class="text-muted"><b>Release Date :</b> 26 April 2019</small></p>
                        <p class="card-text"><small class="text-muted"><b>Director :</b> Russo brothers</small></p>
                        <a href="http://149.56.24.226/avengers-endgame-2019/" class="btn btn-success">Watch Now</a>
                        <a href="/auth/index" class="btn btn-secondary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>