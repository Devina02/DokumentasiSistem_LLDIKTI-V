document.addEventListener('click', function(e) {
    if (e.target.closest('.delete-btn')) {
        itemToDelete = e.target.closest('.grid');
        const itemId = itemToDelete.getAttribute('data-id'); // Mengambil ID dari data yang akan dihapus
        document.getElementById('modal').classList.remove('hidden');

        // Menambahkan event listener pada tombol konfirmasi hapus
        document.getElementById('confirm-delete').addEventListener('click', function() {
            // Kirim request untuk menghapus data dari database
            fetch(`/delete-item/${itemId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    itemToDelete.remove(); // Menghapus elemen dari tampilan
                    document.getElementById('modal').classList.add('hidden');
                } else {
                    alert('Error: ' + data.message);
                }
            });
        });
    }
});
