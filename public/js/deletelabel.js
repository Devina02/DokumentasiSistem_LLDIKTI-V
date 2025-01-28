let itemToDelete = null;

   
   
// Delegasi event untuk tombol hapus (link dan dokumen)
document.addEventListener('click', function(e) {
    if (e.target.closest('.delete-btn')) {
        itemToDelete = e.target.closest('.grid');
        document.getElementById('modal').classList.remove('hidden');
    }
});

// Event untuk tombol close modal
document.getElementById('close-modal').addEventListener('click', function() {
    document.getElementById('modal').classList.add('hidden');
});

// Event untuk tombol cancel
document.getElementById('cancel-btn').addEventListener('click', function() {
    document.getElementById('modal').classList.add('hidden');
});

// Event untuk tombol konfirmasi hapus
document.getElementById('confirm-delete').addEventListener('click', function() {
    if (itemToDelete) {
        itemToDelete.remove();
        itemToDelete = null;
        document.getElementById('modal').classList.add('hidden');
    }
});