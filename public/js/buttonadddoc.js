 // Tambahkan dokumen baru
 document.getElementById('add-docs-btn').addEventListener('click', function() {
    const docsSection = document.getElementById('docs-section');
    const docsDiv = document.createElement('div');
    docsDiv.classList.add('grid', 'grid-cols-2', 'gap-8', 'mb-8');

    
    docsSection.appendChild(docsDiv);
});
