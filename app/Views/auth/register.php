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
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Sign Up <span class="sr-only">(current)</span></a>
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
                        <h3>Sign Up</h3>
                    </center>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input autocomplete="off" autofocus="on" type="text" name="first_name" id="first_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input autocomplete="off" autofocus="on" type="text" name="last_name" id="last_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input autocomplete="off" autofocus="on" type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input autocomplete="off" autofocus="on" type="password" name="password" id="password" class="form-control">
                        </div>
                        <a href="/login" class="btn btn-outline-primary btn-block">Sign Up</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>