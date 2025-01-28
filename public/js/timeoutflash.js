  // Hide flash messages after 3 seconds
  setTimeout(function () {
    const successAlert = document.getElementById('alert-success');
    const warningAlert = document.getElementById('alert-warning');
    
    if (successAlert) {
        successAlert.style.display = 'none';
    }
    if (warningAlert) {
        warningAlert.style.display = 'none';
    }
}, 4000); // 3000 milliseconds = 3 seconds