// Tunggu sampai halaman dimuat sepenuhnya
document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen tombol toggle dan sidebar
    var sidebar = document.getElementById("sidebar");
    var toggleButton = document.getElementById("sidebarCollapse");

    // Tambahkan event listener untuk klik tombol toggle
    toggleButton.addEventListener("click", function () {
        // Tambah/hapus class 'active' pada sidebar
        sidebar.classList.toggle("active");
    });
});
