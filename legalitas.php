<?php 
include_once("inc/inc_koneksi.php"); 
include_once("inc/inc_fungsi.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legalitas - CV. MITRA UTAMA TEKNOLOGI</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo url_dasar() ?>">CV. MITRA UTAMA TEKNOLOGI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#tutors">Founder</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#partners">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#keuntungan">Mengapa Memilih Kami?</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo url_dasar()?>/legalitas.php">Legalitas</a>
                </li>
                <?php if(isset($_SESSION['members_nama_lengkap'])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['members_nama_lengkap']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo url_dasar() ?>/ganti_profile.php">Ganti Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url_dasar() ?>/logout.php">Logout</a>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4">Legalitas Perusahaan</h2>
                <p class="lead">Informasi legalitas CV. MITRA UTAMA TEKNOLOGI</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Surat Kuasa Pendirian</h3>
                <img src="gambar/surat_kuasa.jpg" alt="Surat Kuasa Pendirian" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3>Akta Pendirian</h3>
                <p>CV MITRA UTAMA TEKNOLOGI didirikan berdasarkan Akta Pendirian Nomor 20, tanggal 11 Maret 2023, yang dibuat di hadapan Emy Yulianti, S.H., M.Kn., Notaris di Jambi.</p>
            </div>
        </div>
    </div>
</section>

<?php include_once("inc_footer.php") ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>