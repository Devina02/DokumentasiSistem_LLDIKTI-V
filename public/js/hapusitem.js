// Hapus link
function deleteLink(id_link) {
    fetch(`/superadmin/link/delete/${id_link}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    }).then(response => {
        if (response.ok) {
            location.href = location.href; 
        }
    });
}

// Hapus dokumen
function deleteDoc(id_doc) {
    fetch(`/superadmin/dokumen/delete/${id_doc}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    }).then(response => {
        if (response.ok) {
            location.href = location.href; 
        }
    });
}
