document.getElementById('add-link-btn').addEventListener('click', function() {
    const template = document.querySelector('.link-template');
    const clone = template.cloneNode(true);
    clone.classList.remove('hidden', 'link-template');
    
    // Tambahkan index agar input tetap berpasangan
    const index = document.querySelectorAll('#link-section .grid').length;
    clone.querySelectorAll('input').forEach(input => {
        input.name = input.name.replace(/\[\]/, `[${index}]`);
    });

    document.getElementById('link-section').appendChild(clone);
});
