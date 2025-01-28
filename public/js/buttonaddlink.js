 // Tambahkan link baru
 document.getElementById('add-link-btn').addEventListener('click', function() {
    const linkSection = document.getElementById('link-section');
    const linkDiv = document.createElement('div');
    linkDiv.classList.add('grid', 'grid-cols-2', 'gap-8', 'mb-8');

    linkDiv.innerHTML = `
        <div>
            <label class="block text-gray-700">Nama Link</label>
            <input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500 rounded-xl" 
                   type="text" 
                   name="links[][nama_link]" />
        </div>
        <div class="flex items-center space-x-2">
            <div class="w-full">
                <label class="block text-gray-700">Link</label>
                <input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500 rounded-xl" 
                       type="text" 
                       name="links[][link]" />
            </div>
            <div class="flex space-x-2">
                <button class="text-red-500 hover:text-red-700 delete-btn" type="button">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </div>
    `;
    linkSection.appendChild(linkDiv);
});
