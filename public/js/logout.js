  // Ambil elemen
  const logoutBtn = document.getElementById('logout-btn');
  const overlay = document.getElementById('overlay');
  const confirmLogout = document.getElementById('confirm-logout');
  const cancelLogout = document.getElementById('cancel-logout');

  // untuk tombol logout
  logoutBtn.addEventListener('click', function() {
      overlay.style.display = 'flex'; // Tampilkan overlay
  });

  // untuk konfirmasi logout
  confirmLogout.addEventListener('click', function() {
      // Di sini, arahkan ke halaman home setelah logout
      window.location.href = 'home.blade.php'; //
  });

  // Event listener untuk membatalkan logout
  cancelLogout.addEventListener('click', function() {
      overlay.style.display = 'none'; // Sembunyikan overlay
  });