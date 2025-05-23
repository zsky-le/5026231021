<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar dengan Tabel</title>

    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="latihanKodeSoal1.css">
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <table>
                <tr>
                    <td><img src="LogoUser.png" alt="User Profile" class="user-img"></td>
                    <td>
                        <h3>User</h3>
                        <p>user@mail.com</p>
                    </td>
                </tr>
            </table>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="#" class="menu-item">
                    <i class="fas fa-question-circle"></i>
                    Helperlog
                </a>
            </li>
            <li>
                <a href="#" class="menu-item">
                    <i class="fas fa-search"></i>
                    Helperfind
                </a>
            </li>
            <li>
                <a href="#" class="menu-item">
                    <i class="fas fa-headset"></i>
                    Helperassist
                </a>
            </li>
            </lu>
    </div>
    </nav>

    <!-- Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
            </button>
            <h2>Pengajuan Kontrak</h2>
        </nav>
        <div class="container mt-4">
            <div class="row justify-content-center align-items-center">
                <!-- Gambar Kiri -->
                <div class="col-md-3 text-center">
                    <img src="Helper.png" alt="Worker Left" class="img-fluid">
                </div>

                <!-- Konten Tengah -->
                <div class="col-md-6 text-center">
                    <h3 class="font-weight-bold">Ajukan Kontrak Berhasil Dibuat</h3>
                    <p class="text-muted">
                        Ajukan kontrak anda dengan nomor ID #XXXX untuk PRT atas nama YYY sudah berhasil dibuat dan sedang menunggu proses review oleh admin. Silakan mengecek progress ajukan kontrak anda pada laman berikut.
                    </p>
                    <button class="btn btn-primary">Cek Progress Kontrak</button>
                </div>
            </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script src="latihanKodeSoal1.js"></script>

</body>
</html>


