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
                    <img src="/img/justice1.jpg" class="card-img mt-4" width="200">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Batman vs Superman (2016)</h5>
                        <p class="card-text">Batman v Superman: Dawn of Justice is a 2016 American superhero film based on the DC Comics characters Batman and Superman. It is a follow-up to Man of Steel and the second installment in the DC Extended Universe. The film is directed by Zack Snyder, written by Chris Terrio and David S. Goyer, and features an ensemble cast that includes Ben Affleck, Henry Cavill, Amy Adams, Jesse Eisenberg, Diane Lane, Laurence Fishburne, Jeremy Irons, Holly Hunter, and Gal Gadot. Batman v Superman: Dawn of Justice is the first live-action film to feature Batman and Superman together, as well as the first live-action cinematic portrayal of Wonder Woman. In the film, criminal mastermind Lex Luthor manipulates Batman into a preemptive battle with Superman, whom Luthor is obsessed with.</p>
                        <p class="card-text"><small class="text-muted"><b>Release Date :</b> 25 Maret 2016</small></p>
                        <p class="card-text"><small class="text-muted"><b>Director :</b> Zack Snyder</small></p>
                        <a href="http://149.56.24.226/batman-v-superman-dawn-justice-extended-2016/" class="btn btn-success">Watch Now</a>
                        <a href="/" class="btn btn-secondary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>