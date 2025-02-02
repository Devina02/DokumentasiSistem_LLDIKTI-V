// Function to show modal with correct message and actions
function showDeleteModal(itemType, itemId, itemName) {
    const modal = document.getElementById('confirmDeleteModal');
    const confirmDeleteText = document.getElementById('confirmDeleteText');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');
    
    // Set confirmation message based on item type and name
    if (itemType === 'link') {
        confirmDeleteText.textContent = `Apakah anda yakin ingin menghapus link "${itemName}"?`;
    } else if (itemType === 'dokumen') {
        confirmDeleteText.textContent = `Apakah anda yakin ingin menghapus dokumen "${itemName}"?`;
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

// tutup modal
function closeModal() {
    const modal = document.getElementById('confirmDeleteModal');
    modal.classList.add('hidden');
}