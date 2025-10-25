document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen tombol
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    
    // Tentukan threshold scroll (Ketentuan: > 500px)
    const scrollThreshold = 500;

    // Fungsi untuk menampilkan/menyembunyikan tombol
    function handleScroll() {
        // Mendapatkan posisi scroll vertikal
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        // Ketentuan: Tombol akan muncul jika sudah scroll down > 500px
        if (scrollPosition > scrollThreshold) {
            scrollToTopBtn.classList.add('showBtn');
        } else {
            scrollToTopBtn.classList.remove('showBtn');
        }
    }

    // Fungsi untuk kembali ke posisi atas (top page header)
    function scrollToTop() {
        // Ketentuan: halaman langsung kembali ke posisi atas
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // 'smooth' untuk animasi, gunakan 'auto' untuk instan
        });
    }

    // Pasang event listener untuk mendeteksi scroll
    window.addEventListener('scroll', handleScroll);

    // Pasang event listener untuk mendeteksi klik pada tombol
    scrollToTopBtn.addEventListener('click', scrollToTop);
});