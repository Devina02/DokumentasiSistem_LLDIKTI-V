// Fungsi untuk membuka modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('hidden');
        document.body.classList.add('modal-open');
    }
}

// Fungsi untuk menutup modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('hidden');
        document.body.classList.remove('modal-open');
    }
}

// Tambahkan event listener untuk tombol dengan atribut data-modal-toggle
document.querySelectorAll('button[data-modal-toggle]').forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modal-toggle');
        const username = button.getAttribute('data-username');
        
        const usernameElement = document.getElementById('username-delete');
        if (usernameElement) {
            usernameElement.textContent = username;
        }

        // Tampilkan modal
        openModal(modalId);
    });
});

// Tambahkan event listener untuk tombol "X" (ikon close) secara dinamis
document.querySelectorAll('button[onclick^="closeModal"]').forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('onclick').match(/'([^']+)'/)[1];
        closeModal(modalId);
    });
});

// Memperbaiki fungsi untuk memeriksa perubahan
function checkChanges(userId) {
    var username = document.getElementById('username-' + userId).value;
    var password = document.getElementById('password-' + userId).value;
    
    // Mendapatkan nilai username saat ini yang sudah dipassing dari Blade
    var currentUsername = document.getElementById('current-username-' + userId).value;

    // Cek apakah ada perubahan
    if (username === currentUsername && password === "") {
        document.getElementById('alert-no-change-' + userId).classList.remove('hidden');
        return false; // Jangan kirim form jika tidak ada perubahan
    } else {
        document.getElementById('alert-no-change-' + userId).classList.add('hidden');
        return true; // Kirim form jika ada perubahan
    }
}
