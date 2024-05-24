document.addEventListener('DOMContentLoaded', function() {
    const akunDropdown = document.getElementById('akunDropdown');
    const dropdownContent = document.getElementById('dropdownContent');

    akunDropdown.addEventListener('click', function() {
        dropdownContent.classList.toggle('show');
    });

    // Close the dropdown when clicking outside of it
    window.addEventListener('click', function(event) {
        if (!akunDropdown.contains(event.target)) {
            dropdownContent.classList.remove('show');
        }
    });
});
