@if (session('success'))
<div id="alert-success" class="bg-blue-100 text-blue-800 px-4 py-2 rounded mb-4">
{{ session('success') }}
</div>
@elseif (session('warning'))
<div id="alert-warning" class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded mb-4">
{{ session('warning') }}
</div>
@endif