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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container h-100 pt-5">
        <div class="row align-itemes-center h-100 align-middle">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <center>
                        <h3>Login</h3>
                    </center>
                    <form action="<?= base_url('auth/login') ?> " method='POST'>
                        <div class="form-group">
                            <label for="">Username </label>
                            <input autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input autocomplete="off" autofocus="on" type="password" name="password" id="password" class="form-control">
                        </div>
                        <a href="/" class="btn btn-outline-primary btn-block">Sign In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>