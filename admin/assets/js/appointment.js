document.getElementById('appointmentLink').addEventListener('click', function(event) {
    // Remove active class from all links
    document.querySelectorAll('.appointment-btn').forEach(function(link) {
        link.classList.remove('appointment-active');
    });
    // Add active class to clicked link
    this.classList.add('appointment-active');
});

document.getElementById('pendingLink').addEventListener('click', function(event) {
    // Remove active class from all links
    document.querySelectorAll('.appointment-btn').forEach(function(link) {
        link.classList.remove('appointment-active');
    });
    // Add active class to clicked link
    this.classList.add('appointment-active');
});
