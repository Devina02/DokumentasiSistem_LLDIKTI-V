// Function to show modal with correct message and actions
function showDeleteModal(itemType, itemId, itemName) {
    const modal = document.getElementById('confirmDeleteModal');
    const confirmDeleteText = document.getElementById('confirmDeleteText');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');
    
    // Set confirmation message based on item type and name
    if (itemType === 'link') {
        confirmDeleteText.innerHTML = `Apakah anda yakin ingin <strong>menghapus</strong> link "<strong>${itemName}</strong>"?`;
    } else if (itemType === 'dokumen') {
        confirmDeleteText.innerHTML = `Apakah anda yakin ingin <strong>menghapus</strong> dokumen "<strong>${itemName}</strong>"?`;
    }

    // Show the modal
    modal.classList.remove('hidden');

    // Delete action when "Hapus" is clicked
    deleteConfirmBtn.onclick = function() {
        if (itemType === 'link') {
            deleteLink(itemId); // Call delete link function
        } else if (itemType === 'dokumen') {
            deleteDoc(itemId); // Call delete document function
        }
        modal.classList.add('hidden'); // Close modal after delete
    };
}

// Tutup modal
function closeModal() {
    const modal = document.getElementById('confirmDeleteModal');
    modal.classList.add('hidden');
}
