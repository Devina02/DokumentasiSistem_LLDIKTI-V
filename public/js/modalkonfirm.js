document.getElementById('close-modal').addEventListener('click', function() {
    document.getElementById('modal').classList.add('hidden');
});

document.getElementById('cancel-btn').addEventListener('click', function() {
    document.getElementById('modal').classList.add('hidden');
});

document.getElementById('confirm-delete').addEventListener('click', function() {
    if (itemToDelete) {
        itemToDelete.remove();
        itemToDelete = null;
        document.getElementById('modal').classList.add('hidden');
    }
});