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
            <img src="/img/ljustice.png" width="500">
        </div>
    </div>
    <div class="container">
        <h1>Justice League</h1>
    </div>
    <div class="container mt-5">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://m.media-amazon.com/images/I/716iotZX7oL.jpg" class="card-img mt-4" width="200">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Justice League (2017)</h5>
                        <p class="card-text">Justice League is a 2017 American superhero film based on the DC Comics superhero team of the same name. It is the fifth installment in the DC Extended Universe and a follow-up to Batman v Superman: Dawn of Justice, and was directed by Zack Snyder and written by Chris Terrio and Joss Whedon who served as co-director, based on a story by Terrio and Snyder. It features an ensemble cast that includes Ben Affleck, Henry Cavill, Gal Gadot, Ezra Miller, Jason Momoa, Ray Fisher, Amy Adams, Jeremy Irons, Diane Lane, Connie Nielsen, and J. K. Simmons. In the film, Batman and Wonder Woman recruit The Flash, Aquaman, and Cyborg after Superman's death to save the world from the catastrophic threat of Steppenwolf and his army of Parademons.</p>
                        <p class="card-text"><small class="text-muted"><b>Release Date :</b> 17 November 2017</small></p>
                        <p class="card-text"><small class="text-muted"><b>Director :</b> Zack Snyder</small></p>
                        <a href="http://149.56.24.226/justice-league-2017/" class="btn btn-success">Watch Now</a>
                        <a href="/auth/index" class="btn btn-secondary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>