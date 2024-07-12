<!-- Navigation-->
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav" style="background-color: #535C91;">
    <div class="container">
        <a class="navbar-brand" href="/KosmosKita/index.php">KosmosKita</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded <?php echo $active == 'belajar' ? 'active' : ''; ?>" href="/KosmosKita/belajar.php">Belajar</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded <?php echo $active == 'alat' ? 'active' : ''; ?>" href="/KosmosKita/alat.php">Alat</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded <?php echo $active == 'tentang' ? 'active' : ''; ?>" href="/KosmosKita/tentang.php">Tentang</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded <?php echo $active == 'admin' ? 'active' : ''; ?>" href="/KosmosKita/admin/user_page.php">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-white text-right" style="background-image: url('<?php echo $background_image_url; ?>'); background-size: cover;">
    <div class="container d-flex align-items-center flex-column">
        <h2 class="page-section-heading text-center text-uppercase text-white"><?php echo $header_title; ?></h2>
        <p class="lead text-center"><?php echo $header_subtitle; ?></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p></p>
        <p style="text-align: center;"><?php echo $header_image_credit; ?></p>
    </div>
</header>