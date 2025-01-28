<button type="button" class="w-8 h-8 bg-red-500 rounded-full flex justify-center items-center hover:bg-red-600 transition" 
data-modal-toggle="deleteModal-{{ $user->id_user }}" data-username="{{ $user->username }}">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
stroke="white" class="w-4 h-4">
<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>
</button>