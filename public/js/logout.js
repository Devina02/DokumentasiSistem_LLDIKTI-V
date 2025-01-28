document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.getElementById('logoutButton'); // Tombol logout di sidebar
    const logoutModal = document.getElementById('logoutModal'); // Modal logout
    const cancelLogout = document.getElementById('cancel-logout'); // Tombol batal di modal

    // Ketika tombol logout di sidebar diklik, tampilkan modal
    logoutButton.addEventListener('click', function () {
        logoutModal.classList.remove('hidden'); // Tampilkan modal
    });

    // Ketika tombol batal logout diklik, sembunyikan modal
    cancelLogout.addEventListener('click', function () {
        logoutModal.classList.add('hidden'); // Sembunyikan modal
    });
});
