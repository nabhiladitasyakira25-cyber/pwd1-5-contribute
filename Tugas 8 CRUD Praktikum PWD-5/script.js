function confirmDelete(id) {
    if (confirm("Yakin ingin menghapus data ini?")) {
        window.location = "hapus.php?id=" + id;
    }
}