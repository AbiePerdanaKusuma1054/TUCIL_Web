<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">M O V I E S .C O M</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
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

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="/img/logo.png" width="200">
            <h1 class="display-4">Movies.com</h1>
        </div>
    </div>
    <!--services-container---------------------------->
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Marvel The Avengers</h4>
            <hr>
            <p>Avengers adalah sebuah tim pahlawan super fiksi yang tampil dalam buku-buku komik Amerika yang diterbitkan oleh Marvel Comics. Tim tersebut membuat debutnya dalam The Avengers #1 (sampul tertanggal Sept. 1963), buatan penulis-penyunting Stan Lee dan artis Jack Kirby.</p>
        </div>
    </div>
    <div class="services ">

        <div class="box-container">
            <!--1------------->
            <div class="box-1">
                <img src="https://images-na.ssl-images-amazon.com/images/I/719S7I-%2ByBL._AC_SL1023_.jpg" width="150">
                <p class="heading">Avengers: Age of Ultron (2015)</p>
                <a href="/marvel1">
                    <button type="button" class="btn btn-outline-light">Detail</button>
                </a>
            </div>
            <!--2------------->
            <div class="box-2">
                <img src="https://images-na.ssl-images-amazon.com/images/I/A1t8xCe9jwL._AC_SL1500_.jpg" width="150">
                <p class="heading">Avengers: Infinity War (2018)</p>
                <a href="/marvel2">
                    <button type="button" class="btn btn-outline-light">Detail</button>
                </a>
            </div>
            <!--3------------->
            <div class="box-3">
                <img src="https://i.redd.it/q2y77v0177v21.png" width="150">
                <p class="heading">Avengers: Endgame (2019)</p>
                <a href="/marvel3">
                    <button type="button" class="btn btn-outline-light">Detail</button>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Justice League</h4>
            <hr>
            <p>Justice League adalah film pahlawan super Amerika Serikat produksi tahun 2017 yang diangkat dari DC Comics superhero dengan judul yang sama, didistribusikan oleh Warner Bros. Pictures. Ini merupakan instalasi ke tujuh dari DC Extended Universe. Justice League disutradarai oleh Zack Snyder, berdasarkan skenario yang ditulis oleh Chris Terrio, hasil adaptasi dari cerita karya Snyder dan Terrio.</p>
        </div>
    </div>
    <div class="services ">
        <!--
        <div class="services-text ">
            <p>Justice League</p>
            <p>Justice League adalah film pahlawan super Amerika Serikat produksi tahun 2017 yang diangkat dari DC Comics superhero dengan judul yang sama, didistribusikan oleh Warner Bros. Pictures. Ini merupakan instalasi ke tujuh dari DC Extended Universe. Justice League disutradarai oleh Zack Snyder, berdasarkan skenario yang ditulis oleh Chris Terrio, hasil adaptasi dari cerita karya Snyder dan Terrio.</p>
        </div> -->
        <div class="box-container">
            <!--1------------->
            <div class="box-1">
                <img src="/img/justice1.jpg" width="150">
                <p class="heading">Batman vs Superman (2016)</p>
                <a href="/justice1">
                    <button type="button" class="btn btn-outline-light">Detail</button>
                </a>
            </div>
            <!--2------------->
            <div class="box-2">
                <img src="https://m.media-amazon.com/images/I/716iotZX7oL.jpg" width="150">
                <p class="heading">Justice League (2017)</p>
                <a href="/justice2">
                    <button type="button" class="btn btn-outline-light">Detail</button>
                </a>
            </div>
            <!--3------------->
            <div class="box-3">
                <img src="https://images-na.ssl-images-amazon.com/images/I/91Nw25APFFL._AC_SL1500_.jpg" width="150">
                <p class="heading">Wonder Womans (2017)</p>
                <a href="/justice3">
                    <button type="button" class="btn btn-outline-light">Detail</button>
                </a>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>