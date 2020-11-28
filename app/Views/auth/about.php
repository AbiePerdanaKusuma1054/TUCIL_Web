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
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="/img/logo.png" width="200">
            <h1 class="display-4">Movies.com</h1>
            <p class="lead">Develop by </p>
        </div>
    </div>
    <div class="about-container">
        <!--img-->
        <img src="/img/me.jpeg" />
        <!--about-me-text-->
        <div class="about-text">
            <p>Abie Perdana Kusuma</p>
            <p>1817051054</p>
            <p>Hello,My name is Abie Perdana Kusuma.I am a Student Collage at Lampung University.If you have asany Project or if you want make a software for your bisnes conatact me.I make as soon as possibale.You really like my work,if you don&#8217;t i change this until you like I give you seticfaction result.</p>
            <p>I am a Devolper and also a Designer.If you have asany Project or if you want make a software for your bussniess conatact me.I make your project as soon as possible.</p>
            <a href="https://www.instagram.com/abiperdana.k/">
                <button type="button" class="btn btn-outline-primary">Hire Me</button>
            </a>
            <button type="button" class="btn btn-primary">Download CV</button>
        </div>
    </div>

    <?= $this->endSection(); ?>