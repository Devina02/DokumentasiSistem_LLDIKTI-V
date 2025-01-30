document.getElementById('add-docs-btn').addEventListener('click', function() {
    const template = document.querySelector('.docs-template');
    const clone = template.cloneNode(true);
    clone.classList.remove('hidden', 'docs-template');
    document.getElementById('docs-section').appendChild(clone);
});
