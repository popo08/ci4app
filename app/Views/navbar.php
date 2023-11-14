<?php
$session = session();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning-charge" viewBox="0 0 16 16">
  <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"/>
</svg>TECH</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php if ($session->get('isLoggedIn')) : ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('home/index') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if (session()->get('role')==0): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('barang/index') ?>">Barang <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('barang/create') ?>">+Tambah Barang <span class="sr-only">(current)</span></a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('etalase/index') ?>">Etalase</a>
                </li>
            <?php endif ?>
            </ul>
        <?php endif ?>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <li class="nav-item">
                        <a class="btn btn-dark" href="<?= site_url('auth/logout') ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="btn btn-dark" href="<?= site_url('auth/login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark" href="<?= site_url('auth/register') ?>">Register</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>