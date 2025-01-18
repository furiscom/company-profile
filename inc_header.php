<!DOCTYPE html>
<html lang="en">
<head>
  </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top"> 
    <div class="container">
        <a class="navbar-brand" href="<?php echo url_dasar() ?>">
            <img src="logo.png" alt="Logo" height="50"> 
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#tutors">Tutors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#partners">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url_dasar()?>#contact">Contact</a>
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