<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV. MITRA UTAMA TEKNOLOGI</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light"> 
    <div class="container"> 
        <a class="navbar-brand" href="<?php echo url_dasar() ?>">CV. MITRA UTAMA TEKNOLOGI</a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>/legalitas.php">Legalitas</a> 
                </li>
                <?php if(isset($_SESSION['members_nama_lengkap'])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<section id="home" class="py-5">
    <div class="container">
        <div class="row align-items-center"> 
            <div class="col-md-6">
                <img src="<?php echo url_dasar() ?>/gambar/home.png" class="img-fluid" alt="Gambar Home"> 
            </div>
            <div class="col-md-6">
                <h2 class="display-4">Selamat Datang di CV MITRA UTAMA TEKNOLOGI</h2> 
                <p class="lead">Mitra Anda dalam Solusi Teknologi Informasi</p> 
                <p>CV MITRA UTAMA TEKNOLOGI adalah perusahaan yang bergerak di bidang teknologi informasi. Kami berkomitmen untuk menyediakan solusi teknologi informasi yang inovatif dan berkualitas tinggi untuk membantu bisnis Anda tumbuh dan berkembang.</p>
                <a href="<?php echo url_dasar() ?>/#layanan" class="btn btn-primary">Lihat Layanan Kami <i class="fas fa-arrow-right"></i></a> 
            </div>
        </div>
    </div>
</section>

<section id="tutors" class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-4">Founder</h2> 
            <p class="lead">Kami adalah founder CV ini</p> 
        </div>

        <div class="tutor-list row mt-5"> 
            <?php
            $sql1   = "select * from tutors order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="col-md-3 kartu-tutor mb-4"> 
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" class="img-fluid rounded-circle" alt="<?php echo $r1['nama'] ?>">
                        <p class="card-title mt-3"><?php echo $r1['nama'] ?></p> 
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<section id="partners" class="py-5 bg-light"> 
    <div class="container">
        <div class="text-center">
            <h2 class="display-4">Partners</h2> 
            <p class="lead">Ini adalah partners resmi kami</p> 
        </div>

        <div class="partner-list row mt-5"> 
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="col-md-3 kartu-partner mb-4"> 
                    <a href="<?php echo buat_link_partners($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>" class="img-fluid" alt="Partner Logo"> 
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<section id="layanan" class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-4">Layanan Kami</h2> 
            <p class="lead">Berikut adalah layanan yang kami tawarkan:</p> 
        </div>

        <div class="layanan-list row mt-5"> 
            <div class="col-md-12">
                <ul>
                    <li>Perdagangan besar komputer dan perlengkapan komputer</li> 
                    <li>Perdagangan besar piranti lunak</li> 
                    <li>Aktivitas hosting dan YBDI</li> 
                    <li>Aktivitas pengolahan data</li> 
                    <li>Aktivitas teknologi informasi dan jasa komputer lainnya</li> 
                    <li>Aktivitas konsultasi manajemen lainnya</li> 
                    <li>Aktivitas konsultasi keamanan informasi</li> 
                    <li>Aktivitas konsultasi komputer dan manajemen fasilitas komputer lainnya</li> 
                    <li>Aktivitas penyediaan sertifikat elektronik dan layanan yang menggunakan sertifikat elektronik</li> 
                    <li>Aktivitas pengembangan aplikasi perdagangan melalui internet (e-commerce)</li> 
                    <li>Aktivitas pengembangan video game</li> 
                    <li>Aktivitas penyediaan identitas digital</li> 
                    <li>Jasa sistem komunikasi data</li> 
                    <li>Aktivitas pemrograman komputer lainnya</li> 
                    <li>Aktivitas pemrograman berbasis kecerdasan artifisial</li> 
                    <li>Perdagangan besar alat tulis dan gambar</li> 
                    <li>Reparasi komputer dan peralatan sejenisnya</li> 
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="kontak" class="py-5 bg-light">
    <div class="container">
        <div class="text-center">
            <h2 class="display-4">Kontak Kami</h2> 
            <p class="lead">Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang layanan kami, silakan hubungi kami.</p> 
        </div>

        <div class="kontak-info row mt-5"> 
            <div class="col-md-12 text-center">
                <p>Alamat: Jl. Lorong Terate Perumahan Ridena Nomor L3, RT 011 RW 020, Kelurahan Mendalo Darat, Kecamatan Jambi Luar Kota, Kabupaten Muaro Jambi, Jambi 36361</p> 
            </div>
        </div>
    </div>
</section>

<section id="keuntungan" class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-4">Mengapa Memilih Kami?</h2> 
            <p class="lead">Temukan keuntungan dan nilai tambah yang akan Anda dapatkan dengan memilih CV MITRA UTAMA TEKNOLOGI sebagai mitra TI Anda.</p> 
        </div>

        <div class="keuntungan-grid row mt-5"> 
            <div class="col-md-4 keuntungan-item mb-4"> 
                <h3>Solusi Lengkap</h3> 
                <p>Kami menyediakan solusi TI yang lengkap dan terintegrasi, mulai dari perangkat keras dan perangkat lunak hingga layanan konsultasi dan reparasi.</p> 
            </div>
            <div class="col-md-4 keuntungan-item mb-4"> 
                <h3>Kualitas Terjamin</h3> 
                <p>Kami hanya menyediakan produk dan layanan berkualitas tinggi dari merek-merek terkemuka untuk memastikan kepuasan Anda.</p> 
            </div>
            <div class="col-md-4 keuntungan-item mb-4"> 
                <h3>Tim Profesional</h3> 
                <p>Tim kami terdiri dari para profesional berpengalaman di bidang teknologi informasi yang siap membantu Anda menemukan solusi terbaik.</p> 
            </div>
            <div class="col-md-4 keuntungan-item mb-4"> 
                <h3>Harga Kompetitif</h3> 
                <p>Kami menawarkan harga yang kompetitif dan transparan untuk semua produk dan layanan kami.</p> 
            </div>
            <div class="col-md-4 keuntungan-item mb-4"> 
                <h3>Layanan Pelanggan Terbaik</h3> 
                <p>Kepuasan pelanggan adalah prioritas utama kami. Kami siap memberikan layanan pelanggan yang responsif dan ramah.</p> 
            </div>
            <div class="col-md-4 keuntungan-item mb-4"> 
                <h3>Kemitraan Strategis</h3> 
                <p>Kami menjalin kemitraan strategis dengan perusahaan-perusahaan terkemuka seperti WPG untuk memberikan nilai tambah bagi Anda.</p> 
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