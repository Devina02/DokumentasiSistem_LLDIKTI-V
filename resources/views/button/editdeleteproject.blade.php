<div class="relative">
    <button class="text-gray-600 cursor-pointer" onclick="editProject(event, {{ $Project->id_project }})">
        <i class="fas fa-edit"></i> 
    </button>
    <button class="text-gray-600 cursor-pointer" onclick="showModal(event, '{{ $Project->judul }}', {{ $Project->id_project }})">
        <i class="fas fa-trash-alt"></i>
    </button>
</div>