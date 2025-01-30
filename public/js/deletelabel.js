document.addEventListener('click', function(e) {
    if (e.target.closest('.delete-btn')) {
        itemToDelete = e.target.closest('.grid');
        document.getElementById('modal').classList.remove('hidden');
    }
});