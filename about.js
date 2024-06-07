document.addEventListener('DOMContentLoaded', function() {
    const updateBtn = document.getElementById('update-btn');
    const deleteBtn = document.getElementById('delete-btn');

    updateBtn.addEventListener('click', function() {
        // Redirect to update profile page or show a form for updating profile
        alert('Redirecting to update profile page...');
    });

    deleteBtn.addEventListener('click', function() {
        // Perform delete profile action (you would typically make an AJAX request to the server here)
        if (confirm('Are you sure you want to delete your profile?')) {
            // Simulate a delete request
            // Replace this with actual AJAX request to your server to delete the profile
            alert('Profile deleted successfully!');
            // Redirect to a home page or login page after deleting profile
            window.location.href = 'index.html'; // Redirect to index.html
        }
    });
});
