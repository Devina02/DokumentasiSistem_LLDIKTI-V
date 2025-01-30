let projectIdToDelete = null; // Variabel untuk menyimpan ID project yang akan dihapus

// Fungsi untuk mencegah default action pada klik Edit
function editProject(event, projectId) {
    event.preventDefault();  // Mencegah link href mengikuti
    window.location.href = '/edit/' + projectId;  // Arahkan ke halaman edit
}

// Fungsi untuk menampilkan modal konfirmasi hapus
function showModal(event, projectName, id_project) {
event.preventDefault();  // Mencegah link href mengikuti
projectIdToDelete = id_project;  // Menyimpan ID project yang akan dihapus
// Menampilkan nama project di dalam modal
document.getElementById('project-name').textContent = projectName;
document.getElementById('overlay').classList.remove('hidden');
}

// Event listener untuk tombol hapus (menangani penghapusan)
document.getElementById('confirm-btn').addEventListener('click', function () {
// untuk menghapus proyek
if (projectIdToDelete) {
    axios.delete('/delete/' + projectIdToDelete) 
        .then(function (response) {
            // Jika sukses, sembunyikan modal dan beri pesan sukses
            alert(response.data.message);
            location.reload(); // Reload halaman setelah penghapusan berhasil
        })
        .catch(function (error) {
            console.error('Terjadi kesalahan saat menghapus:', error);
            alert('Gagal menghapus proyek. Coba lagi.');
        });
}
});


// Event listener untuk tombol close
document.getElementById('close-btn').addEventListener('click', function () {
    document.getElementById('overlay').classList.add('hidden');
});

// Event listener untuk tombol batal
document.getElementById('cancel-btn').addEventListener('click', function () {
    document.getElementById('overlay').classList.add('hidden');
});
