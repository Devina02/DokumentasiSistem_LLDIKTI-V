function toggleDropdown(element) {
    const dropdown = element.nextElementSibling;
    dropdown.classList.toggle('hidden');
}

document.addEventListener('click', function(event) {
    const dropdowns = document.querySelectorAll('.relative .absolute');
    dropdowns.forEach(dropdown => {
        if (!dropdown.contains(event.target) && !dropdown.previousElementSibling.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
});