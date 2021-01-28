<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Alika</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/alika.png" type=" image/x-icon">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <!-- <form action="" method="post" autocomplete="off"> -->
        <?= form_open(); ?>
        <img class="mb-4" src="<?= base_url(); ?>assets/img/alika.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <div class="row">
            <div class="col">
                <?php if ($this->session->flashdata('pesan')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <label for="nip" class="visually-hidden">NIP</label>
        <input type="text" name="nip" class="form-control <?= form_error('nip') ? 'is-invalid' : ''; ?>" placeholder="NIP" autofocus>
        <div class="invalid-feedback">
            <?= form_error('nip'); ?>
        </div>
        <label for="password" class="visually-hidden">Password</label>
        <input type="password" name="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" placeholder="Password" autofocus>
        <div class="invalid-feedback">
            <?= form_error('password'); ?>
        </div>
        <button class="btn btn-lg btn-success btn-block mt-4 mb-4" type="submit">Sign in</button>
        <p class="text-muted">atau</p>
        <a href="https://sso.djkn.kemenkeu.go.id/via/sso/remote/login?client_id=portalkeuangan&redirect_uri=http://localhost:8888/alikatwo/sso&no_cache=123" class="text-muted">Login dengan SSO DJKN</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
        </form>
    </main>



</body>

</html>